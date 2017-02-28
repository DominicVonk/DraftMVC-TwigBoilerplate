const gulp = require('gulp')
const eslint = require('gulp-eslint')
const sass = require('gulp-sass')
const watch = require('gulp-watch')
const babel = require('gulp-babel')

gulp.task('eslint', () => {
  return gulp.src(['app/static/js/**/*.js'])
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(babel({
      'presets': [
        ['latest']
      ]
    }))
    .pipe(gulp.dest('public/static/js'))
})

gulp.task('eslint:watch', () => {
  gulp.src('app/static/js/**/*.js').pipe(watch('app/static/js/**/*.js', () => { gulp.start('eslint') }));
})

gulp.task('sass', () => {
  return gulp.src('app/static/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('public/static/css'))
})

gulp.task('sass:watch', () => {
  gulp.src('app/static/scss/**/*.scss').pipe(watch('app/static/scss/**/*.scss', () => { gulp.start('sass') }))
})

gulp.task('default', ['eslint', 'sass', 'eslint:watch', 'sass:watch'])
