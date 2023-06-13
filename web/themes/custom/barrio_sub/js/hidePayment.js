(function($, window, Drupal) {
  Drupal.behaviors.hidePayment = {
    attach: function(context, settings) {
      var hideIt = $("div.product-hide-payment div div.field__item").val();
      // if (hideIt == "1") {

      $(".col-sm-4").show();
    }
  };
})(jQuery, window, Drupal);
