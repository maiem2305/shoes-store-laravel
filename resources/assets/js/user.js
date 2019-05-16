// initialize AOS
var AOS = require('aos');
AOS.init({
  once: true,
});

// Shrink Navbar on Scroll
$(window).scroll(function () {
  if ($(document).scrollTop() > 50) {
    $('#navbar').addClass('shrink');
  } else {
    $('#navbar').removeClass('shrink');
  }
});
