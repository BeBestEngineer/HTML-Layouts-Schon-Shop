module.exports = function(grunt) {
  require('time-grunt')(grunt);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      build: ["build"]
    },

    copy: {
      build: {
        files: [{
          expand: true,
          cwd: "source",
          src: [
            "global_js_components/**",
            "global_third_components/**",
            "global_pages_data/**",
            "page_builders/**",
            "images/**",
            "main_modules/**",
            "other_modules/**",
            "index.php"
          ],
          dest: "build"
        }]
      }
    },

    concat: {
      dist: {
        src: [
          'source/global_css_components/**/*.css',
          'source/main_modules/**/*.css',
          'source/other_modules/**/*.css',
          '!**/demo.css'
        ],
        dest: 'build/css/styles.css'
      }
    },

    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer')({ browsers:
            'Chrome >= 52, ' +
            'Edge >= 13, ' +
            'ff >= 48, ' +
            'ie >= 10, ' +
            'Opera >= 38, ' +
            'Safari >= 9, ' +
            'iOS >=9, ' +
            'ChromeAndroid >= 50, ' +
            'UCAndroid >= 0, ' +
            'Android >= 4.4, ' +
            'ExplorerMobile >= 10, ' +
            'iOS >= 9, ' +
            'OperaMobile >= 0, ' +
            ''
          })
        ]
      },
      dist: {
        src: 'build/css/styles.css'
      }
    },

    cmq: {
      style: {
        files: {
          "build/css/styles.css": ["build/css/styles.css"]
        }
      }
    },

    csscomb: {
      style: {
        expand: true,
        src: ['build/css/styles.css']
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'build/css/style.min.css': ['build/css/styles.css']
        }
      }
    },

    uglify: {
      dist: {
        files: {
          'source/global_third_components/libs/jquery-ui/js/price-regulator.min.js': ['source/global_third_components/libs/jquery-ui/js/price-regulator.js']
        }
      }
    },

    imagemin: {
      images: {
        options: {
          optimizationLevel: 3
        },
        files: [{
          expand: true,
          src: ['build/images/**/*.{png,jpg,gif,svg}']
        }]
      }
    }

  });

  // Load the plugin that provides tasks.
  require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

  // Default task(s).
  grunt.registerTask('default', [
    'clean',
    'copy',
    'concat',
    'postcss:dist',
    'cmq',
    'csscomb',
    'cssmin',
    'imagemin'
  ]);

  grunt.registerTask('minjs', ['uglify']);
};