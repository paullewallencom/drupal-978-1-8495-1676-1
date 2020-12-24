(function ($) {
  Drupal.behaviors.mysiteUserFocus = {
    attach: function() {
      // console.log($('input#edit-name'));
      $('input#edit-name').focus();
    }
  };
}(jQuery));
