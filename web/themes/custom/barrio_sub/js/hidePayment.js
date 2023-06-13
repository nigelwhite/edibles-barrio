(function($, window, Drupal) {
  Drupal.behaviors.barrio_subhidePayment = {
    attach: function(context, settings) {
      if ($("div.product-hide-payment div div.field__item").text() == "1") {
        $(".col-sm-4").hide();
      }

      $(".field--type-text-with-summary p").css("background-color", "yellow");
      // $("div.product-hide-payment div div.field__item").insertAfter(
      //   ".field--type-text-with-summary p"
      // );
    }
  };
})(jQuery, window, Drupal);
