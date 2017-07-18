/**
 * This JS file is only loaded when the ProcessHello module is run
 *
 * You should delete it if you have no javascript to add.
 *
 */

$(document).ready(function () {
    // do something
    //console.log('lalala');
    //onchange="$(this.form).trigger('submit')"

    $('#userfilter').on('change', function () {
        $('#filters').trigger('submit')
    });
}); 
