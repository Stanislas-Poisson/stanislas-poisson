const mix = require('laravel-mix')

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

mix.disableNotifications()
    .options({
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
    .sourceMaps(true === mix.inProduction() ? false : true, 'source-map')

if (true === mix.inProduction()) {
    mix.version()
}

mix.copy('resources/images', 'public/images').copy('resources/favicon', 'public')

mix.js('resources/js/app.js', 'public/js')

mix.sass('resources/sass/app.scss', 'public/css')
