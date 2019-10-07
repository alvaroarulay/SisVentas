const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css/app.css')
/*mix.styles([
   'resources/plantilla/css/main.css'
   ], 'public/css/app.css')
   
   .scripts([
      'resources/js/app.js',
      'resources/plantilla/js/jquery-3.2.1.min.js',
      'resources/plantilla/js/popper.min.js',
      'resources/plantilla/js/bootstrap.min.js',
      'resources/plantilla/js/main.js',
      'resources/plantilla/js/plugins/pace.min.js',
      'resources/plantilla/js/plugins/bootstrap-datepicker.min.js',
      'resources/plantilla/js/plugins/bootstrap-notify.min.js',
      'resources/plantilla/js/plugins/chart.min.js',
      'resources/plantilla/js/plugins/dataTables.bootstrap.min.js',
      'resources/plantilla/js/plugins/fullcalendar.min.js',
      'resources/plantilla/js/plugins/jquery-ui.custom.min.js',
      'resources/plantilla/js/plugins/jquery.dataTables.min.js',
      'resources/plantilla/js/plugins/jquery.vmap.min.js',
      'resources/plantilla/js/plugins/jquery.vmap.sampledata.js',
      'resources/plantilla/js/plugins/jquery.vmap.world.js',
      'resources/plantilla/js/plugins/moment.min.js',
      'resources/plantilla/js/plugins/select2.min.js',
      'resources/plantilla/js/plugins/sweetalert.min.js'
   ], 'public/js/app.js');*/
