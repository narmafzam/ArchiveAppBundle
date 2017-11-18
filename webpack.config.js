var Encore = require('@symfony/webpack-encore');

Encore
    .enableVersioning()

    .setOutputPath('web/build/')

    .setPublicPath('/build')

    .cleanupOutputBeforeBuild()

//    .autoProvidejQuery()

    .autoProvideVariables({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
    })

    // will output as web/build/app.js
    .addEntry('app', './assets/js/main.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './assets/css/global.scss')

    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })

    .enableSourceMaps(!Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();