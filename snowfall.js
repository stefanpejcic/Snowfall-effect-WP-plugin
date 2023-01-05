jQuery(document).ready(function($) {
  $('.snowflake').each(function() {
    $(this).css({
      'left': Math.floor(Math.random() * $(window).width()) + 'px',
      'animation-delay': Math.floor(Math.random() * 5) + 's'
    });
  });
});
