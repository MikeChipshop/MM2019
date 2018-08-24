// Register the service worker
if ('serviceWorker' in navigator) {
	navigator.serviceWorker.register('https://miniman-webdesign.co.uk/service-worker.js').then(function(registration) {
    // Registration was successful
    console.log('ServiceWorker registration successful with scope: ', registration.scope);
}).catch(function(err) {
    // registration failed :(
    	console.log('ServiceWorker registration failed: ', err);
    });
}

jQuery(document).ready(function( $ ) {
	// Scrolling main menu
	var  mn = $("body");
		mns = "fixed";
		hdr = $('.mini_main-header').height();

	$(window).scroll(function() {
	  if( $(this).scrollTop() > hdr ) {
		mn.addClass(mns);
	  } else {
		mn.removeClass(mns);
	  }
	});

	// Mobile menu button
	$('.mini_open-mobile-nav').click(function() {
	  if( $(this).hasClass('mini_toggled') ) {
		$(this).removeClass('mini_toggled');
		$(this).nextAll('ul').slideUp(500);
	  } else {
		$(this).addClass('mini_toggled');
		$(this).nextAll('ul').slideDown(500);
	  }
	});


	$('.mini_welcome-intro button').click(function() {
		$('html,body').animate({
			scrollTop: $("#mini_services-home-section").offset().top
		}, 'slow');
	});
});
