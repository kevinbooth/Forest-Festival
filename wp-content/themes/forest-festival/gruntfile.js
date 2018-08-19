'use strict';

var pkgjson = require('./package.json');

var config = {
    pkg: pkgjson,
};
module.exports = function (grunt) {
    grunt.initConfig({
        cacheBust: {
            options: {
                queryString: true
            },
            full: {
                options: {
                    assets: ['styles/**', 'scripts/**', 'vendor/**'],
                },
                src: ['index.html']
            },
            css: {
                options: {
                    assets: ['styles/**'],
                },
                src: ['index.html']
            },
            js: {
                options: {
                    assets: ['scripts/**'],
                },
                src: ['index.html']
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/'
                }]
            }
        },
        jshint: {
            options: {
                strict: false
            },
            files: ['scripts/js/*.js']
        },
        sass: {
            options: {
                style: 'compressed',
            },
            compile: {
                files: {
                    'styles/styles.min.css': 'styles/scss/styles.scss',
                }
            }
        },
        uglify: {
            options: {
                srcMap: true
            },
            compile: {
                files: {
                    'scripts/common.min.js': ['scripts/js/scripts.js']
                }
            }
        },
        watch: {
            css: {
                files: ['styles/**/*.scss', 'styles/**/**/*.scss'],
                tasks: ['sass','imagemin', 'cacheBust:css']
            },
            scripts: {
                files: ['<%= jshint.files %>'],
                tasks: ['jshint', 'uglify','imagemin', 'cacheBust:js']
            }
        }
    });


    grunt.registerTask('init', [
        'move'
    ]);
    grunt.registerTask('optimize', [
		'sass',
		'jshint',
		'uglify',
		'imagemin',
        'cacheBust:full'
    ]);
    grunt.registerTask('default', []);

    // Load Tasks
    grunt.loadNpmTasks('grunt-cache-bust');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
};