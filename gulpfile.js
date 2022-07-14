const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');


function style() {

    return gulp.src("./assets/sass/main.scss") 

    .pipe(sass().on('error',sass.logError))
    .pipe(concat('styles.css'))
    .pipe(cleanCSS())
    .pipe(gulp.dest("./dist"))
    .pipe(browserSync.stream())
}

function watch() {
    gulp.watch('./assets/sass/mx-styling/*.scss', style);
}

exports.style = style;
exports.watch = watch;