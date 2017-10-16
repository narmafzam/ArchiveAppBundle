var Encore = require('@symfony/webpack-encore');

Encore
    .enableVersioning()

    // directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/build')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    .createSharedEntry('vendor', [
        'jquery'
    ])

    // allow legacy applications to use $/jQuery as a global variable
    // .autoProvidejQuery()

    // will output as web/build/global.css
    .addStyleEntry('global', './web/assets/css/global.scss')

    // will output as web/build/app.js
    .addEntry('app', './web/assets/js/main.js')

    // allow sass/scss files to be processed
    .enableSassLoader()

    .enableSourceMaps(!Encore.isProduction())
;

// export the final configuration
module.exports = Encore.getWebpackConfig();