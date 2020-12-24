(function ($) {
  Drupal.behaviors.myzenComments = {
    attach: function() {
      // Target comment headings.
      $('#comments h3.comment-title')
        .click(function() {
          e.preventDefault();
          // Display all siblings in animated fashion.
          $(this).siblings().show('fast');
        })
        .siblings()
        .hide();
    }
  };
}(jQuery));
