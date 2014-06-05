// -------------------------------------
// Grunt watch
// -------------------------------------

module.exports = {

  // ----- Watch tasks ----- //

  scss: {
    files: ['lib/scss/**/*.scss', 'dev/scss/**/*.scss'],
    tasks: [
      'sass:develop',
      'autoprefixer:develop',
      'rsync:deploy'
    ]
  },
  js: {
    files: ['lib/js/**/*.js', 'dev/js/*.js'],
    tasks: [
      'concat:develop',
      'rsync:deploy'
    ]
  },
  php: {
    files: ['dev/php/templates/*.php', 'dev/php/includes/*.php'],
    tasks: [
      'newer:copy:php',
      'delete_sync:phptemplates',
      'delete_sync:phpincludes',
      'rsync:deploy'
    ]
  },
  css: {
    files: ['dev/css/style.css'],
    tasks: [
      'copy:css',
      'rsync:deploy'
    ]
  },
  img: {
    files: ['dev/img/**/*'],
    tasks: [
      'newer:imagemin:all',
      'delete_sync:img',
      'rsync:deploy'
    ]
  },

  // ----- Enable livereload ----- //

  livereload: {
    options: {
      livereload: true
    },
    files: ['deploy/**/*']
  }
};
