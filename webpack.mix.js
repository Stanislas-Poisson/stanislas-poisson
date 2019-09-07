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

let appTypeProd = (['production', 'staging'].includes(process.env.MIX_APP_ENV)) ? true : false

if (appTypeProd && true === process.env.MIX_LIVERELOAD) {
    let LiveReloadPlugin = require('webpack-livereload-plugin')

    mix.webpackConfig({
        devServer: {
            publicPath: "/",
            compress: true,
            hot: true,
            inline: true
        },
        plugins: [new LiveReloadPlugin()]
    })
}

mix.disableNotifications().options({
    processCssUrls: false,
    uglify: {
        parallel: true,
        uglifyOptions: {
            mangle: true,
            compress: appTypeProd,
        },
    },
})

// mix.copy('node_modules/open-sans-fonts/open-sans', 'public/fonts/open-sans')

mix.copy('resources/img', 'public/images')
    // .copy('resources/img/favicon.ico', 'public')
    .copy('resources/files', 'public/files')
    .copy('resources/videos', 'public/videos')

mix.js('resources/js/app.js', 'public/js')
    .sourceMaps(appTypeProd, 'eval-source-map')
    .version()

mix.sass('resources/sass/app.scss', 'public/css', { includePaths: ['node_modules'] })
    .sourceMaps(appTypeProd, 'eval-source-map')
    .version()
