'use strict';
const browserSync = require('browser-sync').create();
const del = require('del');
const gulp = require('gulp');
const plugins = require('gulp-load-plugins')();
// const packageJson = require('./package.json');
const runSequence = require('run-sequence');

gulp.task('clean', () => {
	return del([
		'./style.css',
		'./style.css.map',
		'./style-editor.css',
		'./style-editor.css.map',
	]);
});

gulp.task('styles', [], () => {
	return gulp.src('./less/styles.less')
		.pipe(plugins.sourcemaps.init())
		.pipe(plugins.less())
		.pipe(plugins.autoprefixer({
			browsers: ['last 3 versions']
		}))
		.pipe(plugins.concat('style.css'))
		.pipe(plugins.cleancss())
		.pipe(plugins.sourcemaps.write('.'))
		.pipe(gulp.dest('./'));
});

gulp.task('editor-styles', [], () => {
	return gulp.src('./less/style-editor.less')
		.pipe(plugins.sourcemaps.init())
		.pipe(plugins.less())
		.pipe(plugins.autoprefixer({
			browsers: ['last 3 versions']
		}))
		.pipe(plugins.concat('style-editor.css'))
		.pipe(plugins.cleancss())
		.pipe(plugins.sourcemaps.write('.'))
		.pipe(gulp.dest('./'));
});

gulp.task('watch-styles', () => {
	gulp.watch('./less/**/*.less', ['styles', 'editor-styles'])
});

gulp.task('watch', () => {
	return runSequence(
		['clean'], ['styles', 'editor-styles'], ['watch-styles']
	);
});

gulp.task('_browser-reload', cb => {
	browserSync.reload();
	cb();
});

gulp.task('default', cb => {
	return runSequence(
		['clean'], ['styles', 'editor-styles'], cb
	);
});
