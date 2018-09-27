module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                sourceMap: true,
                outputStyle: 'compressed',
                includePaths: [
                    'libs'
                ]
            },
            dist: {
                files: {
                    'css/main.css': 'sass/main.scss',
                    'css/print.css': 'sass/print.scss',
                    'css/admin.css': 'sass/admin.scss',
                    'css/editor.css': 'sass/editor.scss'
                }
            }
        },
        postcss: {
            options: {
                processors: [
                    require('autoprefixer')({
                        browsers: [
                            'Chrome >= 35',
                            'Firefox >= 38',
                            'Edge >= 12',
                            'Explorer >= 10',
                            'iOS >= 8',
                            'Safari >= 8',
                            'Android 2.3',
                            'Android >= 4',
                            'Opera >= 12'
                        ]
                    }),
                ]
            },
            dist: {
                src: 'css/main.css',
                dest: 'css/main.css'
            }
        },
        jshint: {
            options: {
                'browser': true,
                'curly': true,
                'eqeqeq': true,
                'indent': 4,
                'latedef': true,
                'nonbsp': true,
                'plusplus': true,
                'quotmark': 'single',
                'undef': true
            },
            default: ['js/*.js']
        },
        concat: {
            head: {
                src: [
                    'libs/modernizr/modernizr.js',
                    'libs/respond/src/respond.js',
                    'js/head.js',
                ],
                dest: 'js/build/head.js',
            },
            main: {
                src: [
                    // Libraries
                    'libs/jquery/dist/jquery.js',
                    'libs/slick.js/slick/slick.js',
                    'libs/bootstrap-sass/assets/javascripts/bootstrap.js',
                    'js/main.js',
                    'libs/matchHeight/jquery.matchHeight.js',
                    'libs/magnific-popup/dist/jquery.magnific-popup.js'
                    // 'libs/jquery-ui/widget.js',
                    // 'libs/jquery-ui/core.js',
                    // 'libs/jquery-ui/widgets/datepicker.js'
                ],
                dest: 'js/build/main.js',
            }
        },
        uglify: {
            head: {
                src: 'js/build/head.js',
                dest: 'js/build/head.min.js'
            },
            main: {
                src: 'js/build/main.js',
                dest: 'js/build/main.min.js'
            }
        },
        watch: {
            sass: {
                files: ['sass/*.scss', 'sass/components/*.scss', 'sass/templates/*.scss'],
                tasks: ['sass:dist', 'postcss:dist'],
                options: {
                    livereload: true
                }
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['jshint', 'concat', 'uglify'],
                options: {
                    spawn: false,
                    livereload: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};
