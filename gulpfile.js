var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

var jsFiles = 'library/js/*.js',
    jsDest = 'dist/js';

    gulp.task('sass', function(){
        return gulp.src('library/scss/style.scss')
            .pipe(sass())
            .pipe(gulp.dest('library/css'))
    });

    gulp.task ('watch',function(){
        gulp.watch('library/**/*.scss', ['sass']);

    });

    gulp.task('scripts', function(){
        return gulp.src(jsFiles)
            .pipe(concat('scripts.js'))
            .pipe(gulp.dest(jsDest));
    });

    gulp.task('minify-css', function(){
        return gulp.src('library/css/*.css')
            .pipe(sourcemaps.init())
            .pipe(cleanCSS({compatibility: 'ie8'}))
            .pipe(concat('style.min.css'))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest('dist/css'));
    });


    gulp.task('default', ['sass', 'watch', 'scripts', 'minify-css']);