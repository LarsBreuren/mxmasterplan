const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');


function style() {

    return gulp.src("./sass/*.scss") 

    .pipe(sass().on('error',sass.logError))
    .pipe(concat('styles.css'))
    .pipe(cleanCSS())
    .pipe(gulp.dest("./dist"))
    .pipe(browserSync.stream())
}

function watch() {
    browserSync.init({
        server: {
            proxy: "http://localhost/mxmasterplan/",
            port: 80
        }
    });
    gulp.watch('./sass/*.scss', style);
}

exports.style = style;
exports.watch = watch;