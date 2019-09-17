(function($){
$(document).ready(function(){

		/*********** Nav menu ***************/
		$('.nav-icon').click(function(){
			$('.menubar-area').toggleClass('canvas-menu');
			return false;
		});

		$('.ai-delivered-content ul li a').click(function(){
				$('.ai-delivered-content ul li a').removeClass('ai-active');
				$(this).addClass('ai-active');
		});

		$('.menubar ul li a').click(function(){
				$('.menubar ul li a').removeClass('menu-active');
				$(this).addClass('menu-active');
		});


		/*********** scroll it ***************/
		$.scrollIt({
			  upKey: 38,                // key code to navigate to the next section
			  downKey: 40,              // key code to navigate to the previous section
			  easing: 'swing',         // the easing function for animation
			  scrollTime: 800,          // how long (in ms) the animation takes
			  activeClass: 'active',    // class given to the active nav element
			  onPageChange: null,       // function(pageIndex) that is called when page is changed
			  topOffset: -80         // offste (in px) for fixed top navigation
		});

		/*********** magnific popup ***************/
		 $('.popup').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			preloader: true,
			iframe: {
				patterns: {
					youtube: {
						src: 'https://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
					},
				}
			},
		});

		/*********** magnific popup ***************/
		$( "#tabs" ).tabs();

});

		$(window).scroll(function(){
			var a= $(window).scrollTop();
			$('.scroll_box').text(a);

			if(a>120){
				$('.header-area').addClass('top-fixed');
			}
			else{
				$('.header-area').removeClass('top-fixed');
			}
		});

}(jQuery));
