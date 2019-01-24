const mix = require('laravel-mix');

const PUBLIC_JS_PATH = 'public/js';

const PUBLIC_CSS_PATH = 'public/css';

const SCSS_PATH = 'resources/assets/sass/';

const JS_PATH = 'resources/assets/js/';

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(JS_PATH + 'app.js', PUBLIC_JS_PATH)
	.sass(SCSS_PATH + 'app.scss', PUBLIC_CSS_PATH)
	.sass(SCSS_PATH + 'user.scss', PUBLIC_CSS_PATH)
	.sass(SCSS_PATH + 'admin.scss', PUBLIC_CSS_PATH)
	.version()
	.disableNotifications();
