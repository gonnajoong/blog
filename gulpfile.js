const fs = require('fs');
const path = require('path');
const gulp = require('gulp');
const fileinclude = require('gulp-file-include');
const inject = require('gulp-inject');
const webpackStream = require('webpack-stream');
const injectString = require('gulp-inject-string');
const rename = require("gulp-rename");
const args = require('get-gulp-args')();
const exec = require('gulp-exec');

if (!fs.existsSync('public/dist')) fs.mkdirSync('public/dist');

const modulePages = fs.readdirSync(path.join(__dirname, './resources/pages/'));
let viewPages = [];
modulePages.forEach((modulePage) => {
    if (fs.existsSync(path.join(__dirname, './resources/pages/' + modulePage + '/' + modulePage + '.blade.php'))) {
        viewPages.push(modulePage);
    }
    if (!fs.existsSync(`public/dist/${modulePage}.css`)) fs.writeFileSync(`public/dist/${modulePage}.css`, '');
    if (!fs.existsSync(`public/dist/${modulePage}.js`)) fs.writeFileSync(`public/dist/${modulePage}.js`, '');
});

const now = new Date().getTime();
const ENV_LOCAL = 'local';
const envPath = './.env';
const isWindow = process.platform === "win32";

let hasEnvFile = false;

if (!args.env) {
    args.env = process.env.NODE_ENV = ENV_LOCAL;
} else {
    process.env.NODE_ENV = args.env;
}

console.log("NODE_ENV=", process.env.NODE_ENV);
console.log("v=", now);

gulp.task('build', ['webpack-watch']);

viewPages.forEach((page, index) => {
    console.log('inject-' + page);
    gulp.task('inject-' + page, returnNextTask(index, 'inject'), () => {
        const array = ['./public/dist/' + page + '.js', './public/dist/' + page + '.css'];
        return gulp.src('./resources/pages/' + page + '/' + page + '.blade.php')
            .pipe(inject(gulp.src(array, {read: false})))
            .pipe(injectString.replace('/public/dist/' + page + '.js', '/dist/' + page + '.js?v=' + now))
            .pipe(injectString.replace('/public/dist/' + page + '.css', '/dist/' + page + '.css?v=' + now))
            .pipe(gulp.dest('resources/views'));
    });
});

gulp.task('set-env', ['inject-' + viewPages[0]], () => {
    console.log('set-env');
    if (fs.existsSync(envPath)) {
        hasEnvFile = true;
        return gulp.src('');
    } else {
        return gulp.src(envPath  + '.' + process.env.NODE_ENV)
            .pipe(rename(envPath))
            .pipe(gulp.dest(''));
    }
});

gulp.task('check-app-key', ['set-env'], () => {
    console.log('check-app-key');
    let hasAppKey = false;
    if (fs.existsSync(envPath)) {
        let envString = fs.readFileSync(envPath).toString();
        if (envString.split('APP_KEY=')[1].split('APP_DEBUG')[0].replace('\n', '')) {
            hasAppKey = true;
        }
    }
    if (hasAppKey) {
        if (!hasEnvFile) {
            console.error("[WARNING] .env file already has APP_KEY");
        }
        return gulp.src('')
            .pipe(exec(`${isWindow ? '' : 'sudo '}php artisan config:cache`))
            .pipe(exec.reporter());
    } else {
        console.log("generate key");
        return gulp.src('')
            .pipe(exec(`${isWindow ? '' : 'sudo '}php artisan key:generate`))
            .pipe(exec.reporter())
            .pipe(exec(`${isWindow ? '' : 'sudo '}php artisan config:cache`))
            .pipe(exec.reporter());
    }
});

gulp.task('webpack-watch', ['check-app-key'], () => {
    console.log('webpack-watch');
    let webpackConfig = require('./webpack.config');

    if (process.env.NODE_ENV === ENV_LOCAL) {
        webpackConfig.watch = true;
    }

    webpackConfig.entry = {};

    modulePages.forEach(page => {
        webpackConfig.entry[page] = `./resources/pages/${page}/module.js`;
    });

    return gulp.src('')
        .pipe(webpackStream(webpackConfig))
        .pipe(gulp.dest('public/dist'));
});

function returnNextTask(currentIndex, key, prev) {
    if (currentIndex === viewPages.length - 1) {
        if (prev) {
            return [prev + '-' + viewPages[0]];
        } else {
            return [];
        }
    } else {
        return [key + '-' + viewPages[currentIndex + 1]];
    }
}