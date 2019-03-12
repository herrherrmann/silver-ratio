"use strict";
import browserSync from "browser-sync";
import del from "del";
import gulp from "gulp";
import gulpSourcemaps from "gulp-sourcemaps";
import gulpLess from "gulp-less";
import gulpAutoprefixer from "gulp-autoprefixer";
import gulpConcat from "gulp-concat";
import gulpCleancss from "gulp-cleancss";

const browserSyncClient = browserSync.create();

export function clean() {
	return del([
		"./style.css",
		"./style.css.map",
		"./style-editor.css",
		"./style-editor.css.map"
	]);
}

export function styles() {
	return gulp
		.src("./less/styles.less")
		.pipe(gulpSourcemaps.init())
		.pipe(gulpLess())
		.pipe(
			gulpAutoprefixer({
				browsers: ["last 3 versions"]
			})
		)
		.pipe(gulpConcat("style.css"))
		.pipe(gulpCleancss())
		.pipe(gulpSourcemaps.write("."))
		.pipe(gulp.dest("./"));
}

export function editorStyles() {
	return gulp
		.src("./less/style-editor.less")
		.pipe(gulpSourcemaps.init())
		.pipe(gulpLess())
		.pipe(
			gulpAutoprefixer({
				browsers: ["last 3 versions"]
			})
		)
		.pipe(gulpConcat("style-editor.css"))
		.pipe(gulpCleancss())
		.pipe(gulpSourcemaps.write("."))
		.pipe(gulp.dest("./"));
}

export function watchStyles(cb) {
	return gulp.watch(
		"./less/**/*.less",
		gulp.parallel(styles, editorStyles),
		cb
	);
}

export function watch(cb) {
	return gulp.series(
		clean,
		gulp.parallel(styles, editorStyles),
		watchStyles,
		cb
	)();
}

export function browserReload(cb) {
	browserSyncClient.reload();
	cb();
}

const defaultTasks = gulp.series(clean, gulp.parallel(styles, editorStyles));

export default defaultTasks;
