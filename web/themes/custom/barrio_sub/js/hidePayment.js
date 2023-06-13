(function($, window, Drupal) {
  Drupal.behaviors.hidePayment = {
    attach: function(context, settings) {
      var hideIt = $("div.product-hide-payment div div.field__item").text();
      // if (hideIt == "1") {

      $(".col-sm-4").show();
      $(".field--type-text-with-summary p").css("background-color", "yellow");
      $("div.product-hide-payment div div.field__item").insertAfter(
        ".field--type-text-with-summary p"
      );
    }
  };
})(jQuery, window, Drupal);
