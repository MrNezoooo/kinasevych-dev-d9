let glob = require('glob-all')
let mix = require('laravel-mix');

mix.postCss('src/css/tailwind.css', 'dist/css', [
  require('tailwindcss'),
])
