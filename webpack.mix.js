let mix = require("laravel-mix");

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

mix
  .js("resources/assets/js/app.js", "public/js")
  .sass("resources/assets/sass/app.scss", "public/css")
  .sass("resources/assets/sass/now-ui-kit.scss", "public/css");

mix
  .copy("node_modules/croppie/croppie.css", "public/css/croppie.css")
  .version();
mix.copy("node_modules/croppie/croppie.js", "public/js/croppie.js").version();

// mix.copy(
//   "node_modules/now-ui-kit/now-ui-kit.min.css",
//   "public/css/now-ui-kit.css"
// );
// mix.copy(
//   "node_modules/now-ui-kit/now-ui-kit.min.js",
//   "public/js/now-ui-kit.css"
// );
