(function($, window, Drupal) {
  Drupal.behaviors.hidePayment = {
    attach: function(context, settings) {
      if ($("div.product-hide-payment div div.field__item").text() == "1") {
        $(".col-sm-4").show();
      }

      $(".field--type-text-with-summary p").css("background-color", "yellow");
      $("div.product-hide-payment div div.field__item").insertAfter(
        ".field--type-text-with-summary p"
      );
    }
  };
})(jQuery, window, Drupal);
