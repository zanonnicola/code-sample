var gulp        = require('gulp');
var browserSync = require('browser-sync');
var sass        = require('gulp-sass');
var prefix      = require('gulp-autoprefixer');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var newer       = require('gulp-newer');
var imagemin    = require('gulp-imagemin');
var minifyCSS   = require('gulp-minify-css');
var gulpFilter = require('gulp-filter');

function swallowError (error) {

    console.log(error.toString());
    this.emit('end');
}
gulp.task('browser-sync', ['sass', 'scripts'], function() {
    browserSync.init(['./*.php', './templates/*.php']);
});

/**
 * Concatenate scripts from js into both _site/css (for live injecting)
 */
gulp.task('scripts', function() {
  return gulp.src(['./js/plugins.js', './js/functions.js'])
    .pipe(concat('concat.js'))
    .on('error', swallowError)
    .pipe(uglify())
    .pipe(gulp.dest('./js/build/'))
    .pipe(browserSync.reload({stream:true}));
});


/**
 * Compile files from _scss into both _site/css (for live injecting) and site */

gulp.task('sass', function () {
    return gulp.src('./scss/*.scss')
        .pipe(sass({
          sourceMap: 'sass',
          sourceComments: 'map'
        }))
        .on('error', swallowError)
        .pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(minifyCSS({compatibility:"ie8"}))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream:true}));
});

var imgSrc = 'img/**';
var imgDest = './img';

// Minify any new images
gulp.task('images', function() {

  // Add the newer pipe to pass through newer images only
  return gulp.src(imgSrc)
      .pipe(newer(imgDest))
      .pipe(imagemin({
            progressive: false,
            optimizationLevel: 1,
            svgoPlugins: [{removeViewBox: false}]
        }))
      .pipe(gulp.dest(imgDest));

});

/**
 * Watch scss and scripts files for changes & recompile
 */
gulp.task('watch', function () {
    gulp.watch('scss/**/*.scss', ['sass']);
    gulp.watch('js/**/*.js', ['scripts']);
    gulp.watch(imgSrc, ['images']);
});

/**
 * Default task, running just `gulp` will compile the sass,
 * Launch BrowserSync & watch files.
 */
gulp.task('default', ['browser-sync', 'watch']);