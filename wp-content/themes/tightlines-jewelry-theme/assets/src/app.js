




(function($) {



// Return to top button

  $(document).ready(function() {

    let offset = 250;
    let duration = 500;

    $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
        $('.return').fadeIn(duration);
      } else {
        $('.return').fadeOut(duration);
      }
    });

    $('.return').click(function(event) {
      event.preventDefault();
      $('html').animate({scrollTop: 0}, duration);
      return false;
    })
  });

  // SameHeight plugin: https://www.npmjs.com/package/same-height
  // Each item needs to be unique. If there are multiple on a screen, they are all the same height.
  // Added these classes to /inc/libraries/widgets/widget-tyche-products/...

  $(document).ready(function() {

    //let prodSameHeight = require('same-height');
   // let SameHeight = require('same-height');

    // $(SameHeight.init('.list-sh-product'));
    // $(SameHeight.set('.list-sh-product'));
    // $(SameHeight.init('.owl-sh-product'));
    // $(SameHeight.set('.owl-sh-product'));
    // $(SameHeight.init('.owl1-sh-product'));
    // $(SameHeight.set('.owl1-sh-product'));
    // $(SameHeight.init('.owl2-sh-product'));
    // $(SameHeight.set('.owl2-sh-product'));
  });


  
  
})(jQuery); // Fully reference jQuery after this point