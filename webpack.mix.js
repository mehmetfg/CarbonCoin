const mix = require('laravel-mix');
const NodePolyfillPlugin = require("node-polyfill-webpack-plugin")
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.webpackConfig({
    plugins: [
        new NodePolyfillPlugin(),
    ],
    resolve: {
        fallback: {
            fs: require.resolve('browserify-fs'),
            path: require.resolve("path-browserify"),
            "crypto": require.resolve("crypto-browserify"),
            "https": require.resolve("https-browserify"),
            "http": require.resolve("stream-http"),
            "vm": require.resolve("vm-browserify"),
            "os": require.resolve("os-browserify/browser"),
            "stream": require.resolve("stream-browserify"),
            "constants": require.resolve("constants-browserify")
        }
    }
})
mix.options({ legacyNodePolyfills: false });
mix.js('resources/js/app.js', 'public/js').react()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])

if (mix.inProduction()) {
    mix.version();
}
