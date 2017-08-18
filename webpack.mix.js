const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('Modules/Chat/Resources/assets/js/message.js', 'public/js')
   .js('Modules/Metronic/Resources/assets/js/setting.js', 'public/js')
   .scripts([
   		'public/assets/offline_cdnjs/jquery.min.js',
   		'public/assets/offline_cdnjs/jquery-migrate.min.js',
   		'public/assets/offline_cdnjs/jquery-ui.min.js',
   		'public/assets/global/plugins/bootstrap/js/bootstrap.min.js',
   		'public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
   		'public/assets/offline_cdnjs/jquery.blockUI.min.js',
   		//'public/assets/global/plugins/jquery.cokie.min.js',
   		'public/assets/global/plugins/Uniform-3.0/src/js/jquery.uniform.js'
   	],'public/js/core_plugins.js')
   .scripts([
   		'public/assets/global/js/metronic.js',
   		'public/assets/admin/layout/js/layout.js',
   		'public/assets/admin/layout/js/demo.js'
   	],'public/js/metronic_layout.js');
