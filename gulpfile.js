const elixir = require('laravel-elixir');
 
require('laravel-materialize');
require('laravel-elixir-vue-2');
 
elixir(mix => {
    mix.sass('app.scss')
       .materialize()
       .webpack('app.js');
});

elixir(mix => {
  mix.sass(['./resources/assets/bower/materialize/sass/materialize.scss'],
      './public/css/materialize.css');
});

elixir(mix => {
  mix.copy('resources/assets/bower/materialize/js/parallax.js', './public/js/materializecomponents.js');
});

elixir(mix => {
  mix.copy('resources/assets/bower/materialize/js/forms.js', './public/js/materialforms.js');
});

elixir(mix => {
  mix.copy('resources/assets/bower/jquery/dist/jquery.min.js', './public/js/jquery.min.js');
});

elixir(mix => {
  mix.copy('resources/assets/bower/materialize/bin/materialize.js', './public/js/materialize.min.js');
});

elixir(mix => {
  mix.copy('resources/assets/bower/materialize/js/tabs.js', './public/js/materialtabs.js');
});
