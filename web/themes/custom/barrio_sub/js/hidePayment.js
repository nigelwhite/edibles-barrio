// hides Edibles Stripe payment on Product if a hide box is ticked

(function($, window, Drupal) {
  Drupal.behaviors.barrio_subhidePayment = {
    attach: function(context, settings) {
      if ($("div.product-hide-payment div div.field__item").text() == "1") {
        $(".col-sm-4").hide();
      }
    }
  };
})(jQuery, window, Drupal);
