(function ($) {
  Drupal.behaviors.mysiteSearch = {
    attach: function() {
      var fields = $('.search-text');
      // Set default text to both fields.
      var text = fields.filter(function() { return $(this).val().length; }).val();
      fields.val(text);

      // Sync textfield key-presses.
      fields.keyup(function(event){
        fields.not(this).val($(this).val());
      });
    }
  };
}(jQuery));
