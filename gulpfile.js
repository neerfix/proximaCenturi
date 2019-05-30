var gulp            = require('gulp');
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
var cssnano         = require('gulp-cssnano');
var sourcemaps      = require('gulp-sourcemaps');
var browserSync     = require('browser-sync').create();
var reload          = browserSync.reload;

var src = './assets';
var dest = './';

gulp.task('sass', function () {
    return gulp.src(src + '/styles/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./css'));
});

gulp.task('css', function () {
   return gulp.src( './css/style.css')
       .pipe(autoprefixer()) // Add Vendor prefixes to CSS rules by Can
       .pipe(gulp.dest( dest + 'css'))
});

gulp.task('cssnano', function () {
    return gulp.src( './css/style.css')
        .pipe(cssnano()) // Add Vendor prefixes to CSS rules by Can
        .pipe(gulp.dest( dest + 'css'))
});

gulp.task('build', function () {
    return gulp.src(src + '/styles/**/*.scss')
        .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(autoprefixer())
            .pipe(cssnano())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./css'))
        .pipe(reload({stream:true}));
});

// Static Server + watching SCSS/HTML files
// gulp.task('serve', ['build'], function () {
// //     browserSync.init({
// //         proxy: 'localhost/boot'
// //     });
// //
// //     gulp.watch("assets/styles/**/*.scss", ['build']);
// //     gulp.watch("assets/styles/**/*.scss").on('change', browserSync.reload);
// // });