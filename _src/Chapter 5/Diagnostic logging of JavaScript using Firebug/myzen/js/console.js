(function ($) {
  Drupal.behaviors.consoleDebug = {
    attach: function() {
      var s = 'Foo';

      console.log(s);
      console.debug(s);

      $('a').each(function() {
        // console.log(this);
        console.count('Number of links on the page:');
      });
      console.warn('This is simply a warning!');
      console.error('This is an error!');
    }
  };
}(jQuery));

