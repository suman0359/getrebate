$(document).ready(function() {
 
  $("#owl-carousel-auto").owlCarousel({
      autoPlay : 3000,
      navigation : true, // Show next and prev buttons
      navigationText: [' <i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});

