var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');


gulp.task('styles', function() {
  return gulp.src('wp-content/themes/bouncy/assets_dev/css/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('wp-content/themes/bouncy/'))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('wp-content/themes/bouncy/'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('wp-content/themes/bouncy/'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('fonts', function() {
  return gulp.src('wp-content/themes/bouncy/assets_dev/fonts/*')
    .pipe(gulp.dest('wp-content/themes/bouncy/assets_dist/fonts'))
    .pipe(notify({ message: 'Fonts task complete' }));
});


gulp.task('vendor', function() {
  return gulp.src('wp-content/themes/bouncy/assets_dev/vendor/*')
    .pipe(gulp.dest('wp-content/themes/bouncy/assets_dist/vendor'))
    .pipe(notify({ message: 'Fonts task complete' }));
});


gulp.task('scripts', function() {
  return gulp.src('wp-content/themes/bouncy/assets_dev/js/**/*.js')
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('wp-content/themes/bouncy/assets_dist/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('wp-content/themes/bouncy/assets_dist/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});


gulp.task('images', function() {
  return gulp.src('wp-content/themes/bouncy/assets_dev/img/**/*')
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest('wp-content/themes/bouncy/assets_dist/img'))
    .pipe(notify({ message: 'Images task complete' }));
});


gulp.task('clean', function() {
    return del(['wp-content/themes/bouncy/assets_dist/css', 'wp-content/themes/bouncy/assets_dist/js', 'wp-content/themes/bouncy/assets_dist/img', 'wp-content/themes/bouncy/assets_dist/fonts', 'wp-content/themes/bouncy/assets_dist/vendor']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images', 'fonts', 'vendor');
});

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('wp-content/themes/bouncy/assets_dev/css/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('wp-content/themes/bouncy/assets_dev/js/**/*.js', ['scripts']);

  // Watch image files
  gulp.watch('wp-content/themes/bouncy/assets_dev/img/**/*', ['images']);

  // Watch fonts files
  gulp.watch('wp-content/themes/bouncy/assets_dev/fonts/**/*', ['fonts']);

  // Watch fonts files
  gulp.watch('wp-content/themes/bouncy/assets_dev/vendor/**/*', ['vendor']);

  

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch(['wp-content/themes/bouncy/**']).on('change', livereload.changed);

});