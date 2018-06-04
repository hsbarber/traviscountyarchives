 var gulp = require('gulp'),
	sass = require('gulp-sass')
	autoprefixer  = require('gulp-autoprefixer'),
	plumber = require('gulp-plumber');
	sourcemaps = require('gulp-sourcemaps');
  browserSync = require('browser-sync').create();
  reload = browserSync.reload;


gulp.task('sass', function() {
  return gulp.src('./css/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(sourcemaps.write({includeContent: false}))
	.pipe(sourcemaps.init({loadMaps: true}))
  .pipe(autoprefixer())
  .pipe(sourcemaps.write('.'))
  .pipe(plumber())
.pipe(gulp.dest('./'))
});

gulp.task('watch', function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'archives2.local',
    port: 7000,
  });
  gulp.watch('./css/**/*.scss', ['sass', reload]);

});

gulp.task('default', ['sass', 'watch']);