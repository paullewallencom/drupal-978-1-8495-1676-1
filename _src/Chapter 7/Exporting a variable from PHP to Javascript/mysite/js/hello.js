(function ($) {
  Drupal.behaviors.mysiteHello = {
    attach: function() {
      // Use console.log to confirm existence
      // of variables via Firebug.
      console.log(Drupal.settings.hello);
      console.log(Drupal.settings.helloarray.hello + " and " + Drupal.settings.helloarray.goodbye);
    }
  };
}(jQuery));
