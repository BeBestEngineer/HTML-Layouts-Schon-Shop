module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      build: ['build']
    },

    copy: {
      build: {
        files: [
          {
            expand: true,
            cwd: "source/global_third_components",
            src: [
              "fonts/**"
            ],
            dest: "build"
          },
          {
            expand: true,
            cwd: "source",
            src: [
              "images/**"
            ],
            dest: "build"
          }
        ]
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
      main_styles: {
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

    replace: {
      fonts: {
        options: {
          patterns: [
            {
              match: /global_third_components\//g,
              replacement: ''
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/css/main-styles.css'
            ]
          }
        ]
      },
      link_tags: {
        options: {
          patterns: [
            {
              match: /\s{2}<link[^>]+>\n/g,
              replacement: ''
            },
            {
              match: /<\/head>/,
              replacement: '\t\<link rel="stylesheet" href="css/vendor-styles.min.css">\n\t\<link rel="stylesheet" href="css/main-styles.min.css">\n<\/head>'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      script_tags: {
        options: {
          patterns: [
            {
              match: /\s{4}<script[^>]+><\/script>\n/g,
              replacement: ''
            },
            {
              match: /<\/body>/,
              replacement: '\t\<script src="js/vendor-scripts.min.js"></script>\n\t\t\<script src="js/main-scripts.min.js"></script>\n\t<\/body>'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      comments: {
        options: {
          patterns: [
            {
              match: /\s{2}<!--[\d\s\w-]+-->\n/g,
              replacement: ''
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toHome: {
        options: {
          patterns: [
            {
              match: /\?page=home/g,
              replacement: 'home.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toProductsList: {
        options: {
          patterns: [
            {
              match: /\?page=products-list/g,
              replacement: 'products-list.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toProduct: {
        options: {
          patterns: [
            {
              match: /\?page=product/g,
              replacement: 'product.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toShoppingCart: {
        options: {
          patterns: [
            {
              match: /\?page=shopping-cart/g,
              replacement: 'shopping-cart.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toAboutUs: {
        options: {
          patterns: [
            {
              match: /\?page=about-us/g,
              replacement: 'about-us.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toContactUs: {
        options: {
          patterns: [
            {
              match: /\?page=contact-us/g,
              replacement: 'contact-us.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_to404: {
        options: {
          patterns: [
            {
              match: /\?page=404/g,
              replacement: '404.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toIndex: {
        options: {
          patterns: [
            {
              match: /home.html/g,
              replacement: 'index.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      build: {
        files: {
          'build/css/main-styles.min.css': ['build/css/main-styles.css'],
          'build/css/vendor-styles.min.css': ['build/css/vendor-styles.css']
        }
      }
    },

    uglify: {
      build: {
        files: {
          'build/js/main-scripts.min.js': ['build/js/main-scripts.js']
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
    },

    shell: {
      convertPagesToHTML: {
        cwd: 'source',
        command: [
          'php html-converter.php -p404',
          'php html-converter.php -pabout-us',
          'php html-converter.php -pcontact-us',
          'php html-converter.php -phome',
          'php html-converter.php -pproduct',
          'php html-converter.php -pproducts-list',
          'php html-converter.php -pshopping-cart'
        ].join('&')
      },
      renamePageToIndex: {
        cwd: 'build',
        command: [
          'mv  home.html  index.html'
        ].join('&')
      }
    }
  });

  // Load the plugin that provides tasks.
  require('load-grunt-tasks')(grunt, {scope: ['devDependencies', 'dependencies']});
    require('time-grunt')(grunt);

  // Default task(s).
  grunt.registerTask('default', [
    'clean',
    'copy',
    'concat',
    'postcss:main_styles',
    'cmq',
    'csscomb',
    'shell:convertPagesToHTML',
    'replace',
    'shell:renamePageToIndex',
    'cssmin',
    'uglify',
    'imagemin'
  ]);
};
