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
            "global_third_components/fonts/**",
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
      options: {
        separator: '\n /*SeparatoR*/ \n'
      },
      main_styles: {
        src: [
          'source/global_css_components/**/*.css',
          'source/main_modules/**/*.css',
          'source/other_modules/**/*.css',
          '!**/demo.css'
        ],
        dest: 'build/css/main-styles.css'
      },
      vendor_styles: {
        src: [
          'source/global_third_components/libs/normalize-css/normalize.css',
          'source/global_third_components/frameworks/bootstrap/dist/css/bootstrap.css',
          'source/global_third_components/libs/jquery-ui/css/price-regulator.css',
          'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.css'
        ],
        dest: 'build/css/vendor-styles.css'
      },
      main_scripts: {
        src: [
          'source/global_js_components/main.js'
        ],
        dest: 'build/js/main-scripts.js'
      },
      vendor_scripts: {
        src: [
          'source/global_third_components/libs/jquery/jquery.min.js',
          'source/global_third_components/frameworks/bootstrap/dist/all-js-modules/bootstrap.min.js',
          'source/global_third_components/libs/jquery-ui/js/price-regulator.min.js',
          'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.min.js',
        ],
        dest: 'build/js/vendor-scripts.min.js'
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
        src: 'build/css/main-styles.css'
      }
    },

    cmq: {
      style: {
        files: {
          "build/css/main-styles.css": ["build/css/main-styles.css"]
        }
      }
    },

    csscomb: {
      style: {
        expand: true,
        src: ['build/css/main-styles.css']
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'build/css/main-styles.min.css': ['build/css/main-styles.css'],
          'build/css/vendor-styles.min.css': ['build/css/vendor-styles.css']
        }
      }
    },

    uglify: {
      dist: {
        files: {
          // 'source/global_third_components/libs/jquery-ui/js/price-regulator.min.js': ['source/global_third_components/libs/jquery-ui/js/price-regulator.js']
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

  grunt.registerTask('minjs',  ['uglify']);
  grunt.registerTask('mincss', ['cssmin']);
  grunt.registerTask('conven', ['concat']);
};