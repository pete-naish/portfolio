'use strict';

module.exports = function (grunt) {

    require('time-grunt')(grunt);
    require('jit-grunt')(grunt);
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // browser sync - maps your local site to an ip address that you can visit with other devices on the same network
        // run using grunt sync, then copy the External URL.
        browserSync: {
            dev: {
                options: {
                  proxy: 'local.office-music-player.co.uk'
                }
            }
        },


        //jshint config 
        jshint: {
            files: ['assets/js/*.js',],
            options: {
              '-W030': true,
              globals: {
                   console:true
              }
            }
        },

        //sass
        sass: {
            options: {
              sourceMap: true
            },
            development: {
                files: {
                    "assets/css/app.css": "assets/css/sass/app.scss"
                }
            }
        },

        // Auto-prefixer
        autoprefixer: {
            options: {
                browsers: ['opera 12', 'ff 15', 'chrome 25', 'ie 8']
            },
            single_file: {
                src: 'assets/css/app.css',
                dest: 'assets/css/app.min.css'
            }
        },

        //watch
        watch: {
            js: {
                files: ['assets/js/*.js', 'assets/js/**/*.js'],
                tasks: ['jshint', 'requirejs'],
                options: {
                  spawn: false,
                }
            },
            styles: {
                files: ['assets/css/sass/*.scss', 'assets/css/sass/**/*.scss'],
                tasks: ['sass']
            },
            css: {
                files: ['assets/css/app.css'],
                tasks: ['autoprefixer'],
                options: {
                  livereload: true,
                }
            }
        },

        concurrent: {
          first: ['sass'],
          second: ['autoprefixer']
        },

    });

  // Uncomment this to turn tests on
  grunt.registerTask('default', ['concurrent:first', 'concurrent:second', 'watch']);

  grunt.registerTask('sync', ['browserSync']);
 
  grunt.event.on('watch', function (action, filepath, target) {
    //change the source and destination in the uglify task at run time so that it affects the changed file only

    if (target === 'uglify') {

      var destFilePath = filepath.replace(/\/js\//, '/js/min/');

      destFilePath = destFilePath.replace(/\/min\/(.+)\.js$/, '/min/$1.min.js');

      grunt.config('uglify.all.src', filepath);
      grunt.config('uglify.all.dest', destFilePath);

    } else if (target === 'jshint') {

      grunt.config('jshint.files', filepath);

    }

  });

};