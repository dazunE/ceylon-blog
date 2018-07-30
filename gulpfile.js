var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    jshint = require('gulp-jshint');



gulp.task('css', function () {
    return gulp.src('./sass/style.scss')
        .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
        .pipe(gulp.dest('.'))
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(browserSync.reload({stream:true , once: true}));
});

gulp.task('js',function(){
    gulp.src('./js/*.js')
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('default'))
        .pipe(header(banner, { package : package }))
        .pipe(gulp.dest('./js/.'))
        .pipe(uglify())
        .pipe(browserSync.reload({stream:true, once: true}));
});

gulp.task('browser-sync', function() {
    browserSync.init(null, {
        proxy:'themes.dev'
    });
});
gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('default', ['css', 'browser-sync'], function () {
    gulp.watch("./sass/**/*.scss", ['css']);
    gulp.watch("./js/*.js", ['js']);
    gulp.watch("./**/*.php", ['bs-reload']);
});
