var gulp    = require('gulp');
var plumber = require('gulp-plumber')
var concat  = require('gulp-concat');
var uglify  = require('gulp-uglify');
var sass    = require('gulp-sass');

//js builder vriables
var js_src_admin       = './resources/scripts/admin/*.js';
var js_dist_admin      = './dist/admin';
var js_dist_name_admin = 'index.js';

//sass builder variables
var sass_src_theme = './resources/styles/theme/index.scss';
var sass_dist_theme = './dist/theme';

var sass_src_admin  = './resources/styles/admin/index.scss';
var sass_dist_admin = './dist/admin';

gulp.task('scripts-admin', function() {
    return gulp.src(js_src_admin)
    .pipe(plumber())
    .pipe(uglify())
    .pipe(concat(js_dist_name_admin))
    .pipe(gulp.dest(js_dist_admin));
});

gulp.task('scss-admin', function(){
    return gulp.src(sass_src_admin)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(sass_dist_admin));
})

gulp.task('scss-theme', function(){
    return gulp.src(sass_src_theme)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(sass_dist_theme));
})


gulp.task('watch', function(){
    gulp.watch([js_src_admin], gulp.series('scripts-admin'));
    gulp.watch([sass_src_admin], gulp.series('scss-admin'));
    gulp.watch([sass_src_theme], gulp.series('scss-theme'));
});