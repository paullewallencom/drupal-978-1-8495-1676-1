(function ($) {
  Drupal.behaviors.myzenBlockDisplay = {
    attach: function() {
      // We are targeting all blocks inside sidebars.
      var s = $('div.sidebar').addClass('js-sidebar');

      $('.block h2.block-title', s)
        .click(function () {
          $(this).siblings().toggle('slow');
          $(this).parent().toggleClass('block-open');
        })
      .siblings()
      .hide();
    }
  };
}(jQuery));
