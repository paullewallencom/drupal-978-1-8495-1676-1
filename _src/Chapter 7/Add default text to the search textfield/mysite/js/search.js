(function ($) {
  Drupal.behaviors.mysiteSearch = {
    attach: function() {
      // Hide the search submit button.
      $('#block-search-form .form-submit').hide();

      // Apply the default text to the search block's text
      // field.
      $('#block-search-form .form-type-textfield .form-text')
        // Widen textfield.
        .attr('size', 30)
        // Add default text options on blur.
        .blur(function () {
          $(this).attr('value', Drupal.t('Enter search query ...'))
          .click(function () {
            $(this).attr('value', '');
            $(this).unbind('click');
          });
        })
        // Trigger the blur event to set things up.
        .blur();
    }
  };
}(jQuery));
