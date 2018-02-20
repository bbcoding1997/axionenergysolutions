var gulp = require('gulp');
var sass = require('gulp-sass');
var autoPreFixer = require('gulp-autoprefixer');
var sassLint = require('gulp-sass-lint');

gulp.task('sass', function(){
  return gulp.src('./src/sass/*.scss')
    .pipe(sass())
    .pipe(autoPreFixer())
    .pipe(gulp.dest('./src/css'));
});

gulp.task('sass-lint', function(){
  return gulp.src('./src/sass/**/*.scss')
    .pipe(sassLint())
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError())

});

gulp.task('watch', function(){
  gulp.watch('./src/sass/**/*.scss', ['sass-lint', 'sass']);
});

gulp.task('default', ['sass-lint', 'sass', 'watch']);
