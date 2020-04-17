// CAROUSEL
$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        navigation : true, // Show next and prev buttons
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

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    animation: 2000,
    smartSpeed: 500,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

// BUTTON TOP

$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100){
			$('#myBtn').fadeIn();
		} 
		else{
			$('#myBtn').fadeOut();
		}
	});
	$('#myBtn').click(function(){
		$("html, body").animate({scrollTop : 0},700);
		return false;
	});
});


// animation sroll
    AOS.init();

$(function () {
  'use strict';

  // Add class active when the user clicks the lis of the menu
  $('.nav .list li').on('click', 'a', function () {
    $(this).parent().addClass('active').siblings().removeClass('active');
  });


  var openCategories = $('.nav #open-categories'),
      categories = $('.drop-down');

  // Toggle categories on clicking
  openCategories.on('click', function () {
    $("#" + $(this).data('dropdown')).toggleClass('show');
    // When the user clicks the window if the categories is not the target, close it.
    $(window).on('mouseup', function (e) {
      if ( categories.hasClass('show')
          && ! categories.is(e.target)
          && categories.has(e.target).length === 0
          && ! openCategories.is(e.target) ) {
        categories.removeClass('show');
      }
    });
  });


  // Toggle menu, This will be shown in Extra small screens only
  $('.nav .toggle-nav').on('click', function () {
    $( "#" + $(this).data('toggle') ).slideToggle(300);
  });

});
// ************
       $('#header-search').on('keyup', function() {
           var search = $(this).serialize();
           if ($(this).find('.m-input').val() == '') {
               $('#search-suggest div').hide();
           } else {
               $.ajax({
                   url: '/search',
                   type: 'POST',
                   data: search,
               })
               .done(function(res) {
                   $('#search-suggest').html('');
                   $('#search-suggest').append(res)
               })
           };
       });