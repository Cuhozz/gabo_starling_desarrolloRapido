// gulpfile.js
// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    livereload = require('gulp-livereload');

// Sass
gulp.task('sass',function(){
	return gulp.src('./assets/sass/style.scss')
		.pipe(sass.sync({outputStyle: 'compressed'}).on('error',sass.logError))
		.pipe(livereload())
		.pipe(gulp.dest('./'));
});

//Livereload
gulp.task('php', function(){
    return gulp.src('./*.php').pipe(livereload());
});

// Watch
gulp.task('watch', function() {
	gulp.watch('./assets/sass/**/*.scss',gulp.series('sass'));
    livereload.listen(35729);
    gulp.watch('./*.php',gulp.series('php')); 
});