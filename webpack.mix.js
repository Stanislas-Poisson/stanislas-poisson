const mix = require('laravel-mix')

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
if (false === mix.inProduction() && true === process.env.MIX_LIVERELOAD) {
    let LiveReloadPlugin = require('webpack-livereload-plugin')

    mix.webpackConfig({
        devServer: {
            publicPath: '/',
            compress: true,
            hot: true,
            inline: true,
        },
        plugins: [new LiveReloadPlugin()],
    })
}

mix.disableNotifications().options({
    processCssUrls: false,
    sassOptions: {
        includePaths: ['node_modules/compass-mixins-fixed'],
    },
    uglify: {
        parallel: true,
        uglifyOptions: {
            compress: true === mix.inProduction() ? true : false,
            mangle: true,
        },
    },
})

if (true === mix.inProduction()) {
    mix.version()
} else {
    mix.sourceMaps(true, 'source-map')
}

// mix.copy('node_modules/open-sans-fonts/open-sans', 'public/fonts/open-sans')

mix.copy('resources/img', 'public/images')
    // .copy('resources/img/favicon.ico', 'public')

mix.js('resources/js/app.js', 'public/js')

mix.sass('resources/sass/app.scss', 'public/css')
