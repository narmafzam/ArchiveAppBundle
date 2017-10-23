var Encore = require('@symfony/webpack-encore');

Encore
    .enableVersioning()

    .setOutputPath('web/build/')

    .setPublicPath('/build')

    .cleanupOutputBeforeBuild()

    .autoProvidejQuery()

    // will output as web/build/app.js
    .addEntry('app', './web/assets/js/main.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './web/assets/css/global.scss')

    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })

    .enableSourceMaps(!Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();