// var $ = require('jquery');
//

var $ = require('jquery');
window.$ = $;
window.jQuery = $;

require('bootstrap-sass');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();

    $(document).on('change', 'input:file', function() {

        var file = $(this),
            numFiles = file.get(0).files ? file.get(0).files.length : 1,
            label = file.val().replace(/\\/g, '/').replace(/.*\//, '')
        ;

        var input = file.closest('.input-group').find('input:text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label
        ;

        if (input.length) {

            input.val(log);
        }
    });
});