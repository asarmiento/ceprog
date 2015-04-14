var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');



    mix.styles([

    	'bootstrap.css',
    	'bootstrap-theme.css',
    	'normalize.css',
        'select2.css',
        'dropzone.css',
    	'app.css'


    	], 'public/css/vendor', 'public/css');


    mix.scripts([

    	'jquery.js',
    	'bootstrap.js',
        'select2.js',
        'dropzone.js'

    	], 'public/js/vendor', 'public/js');

});
