const gulp = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const minify = require('gulp-minify-css');
const merge = require('merge-stream');

	
function style() {
    return (

        gulp.src("./sass/*.scss")
            .pipe(sass()).on("error", sass.logError)
            .pipe(concat('styles.css'))
            .pipe(gulp.dest("./dist"))
    );
}

function watch(){
    gulp.watch('./sass/*.scss', style)
}

exports.watch = watch
exports.style = style;