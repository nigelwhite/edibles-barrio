(function ($) {
    'use strict';
    
    $(document).ready(function () {

        // hide Marsden option in "Your pick up preference" for Salad Box
        $('#edit-field-drop-off-preference-marsden').hide();
        $("label[for=edit-field-drop-off-preference-marsden],#edit-field-drop-off-preference-marsden").hide();

        // hide Slaithwaite option in "Your pick up preference" for Salad Box
        $('#edit-field-drop-off-preference-slaithwaite').hide();
        $("label[for=edit-field-drop-off-preference-slaithwaite],#edit-field-drop-off-preference-slaithwaite").hide();

    });

}(jQuery));