window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        var $fba = jQuery('#fba');
        var $fbaClose = jQuery('#fba-close');
        $fbaClose.click(function () {
            $fba.slideUp();
        });

    });


});