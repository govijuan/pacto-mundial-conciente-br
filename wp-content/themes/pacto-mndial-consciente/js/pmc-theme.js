(function($) {

	var windowWidth = $(window).width(),
	logoWidth = $('.logo-container').innerWidth(),
	marginWrapWidth = $('.margin-wrap').innerWidth(),
	navbarWidth,
	NavLinksLength,
	navLinksWidth;
	
	function adjustNavarElementsSizes(){
		if(windowWidth >= 1320){
			//escribir código de cuando es mayor o igual a 1320px
			navbarWidth = marginWrapWidth - logoWidth;
			NavLinksLength = $('#primary-menu li').length;
			navLinksWidth = navbarWidth / NavLinksLength;
			$('#primary-menu').css('width', navbarWidth + 'px');
			$('#primary-menu li').css('width', navLinksWidth + 'px');
			$('#primary-menu li:nth-child(5n+1) a').addClass('hvr-bounce-to-top-am');
			$('#primary-menu li:nth-child(5n+2) a').addClass('hvr-bounce-to-top-lar');
			$('#primary-menu li:nth-child(5n+3) a').addClass('hvr-bounce-to-top-fuc');
			$('#primary-menu li:nth-child(5n+4) a').addClass('hvr-bounce-to-top-ver');
			$('#primary-menu li:nth-child(5n+5) a').addClass('hvr-bounce-to-top-azu');
		}
	}
	function destaqueItemsAnimation(){
		//$('.destaque-wrap div:first-child').addClass('destaque-big');
		$('.destaque').hover(
		function(){
			$(this).find('.thumb-wrap img').addClass('dest-hover-img');
			},
		function(){	
			$(this).find('.thumb-wrap img').removeClass('dest-hover-img');
		}
		);
	}
	
	
	$(document).ready(function($){
	//jQuery('div.destaque-wrap div.destaque:nth-child(2), div.destaque-wrap div.destaque:nth-child(3), div.destaque-wrap div.destaque:nth-child(4)').addClass('destaque-scrolled');
	$('.destaque-wrap div.destaque:nth-child(2), .destaque-wrap div.destaque:nth-child(3), .destaque-wrap div.destaque:nth-child(4)').wrapAll('<div class="destaque-scrolled"></div>');
	adjustNavarElementsSizes();
	destaqueItemsAnimation();



	});
	
	// $ Works! You can test it with next line if you like
	 //console.log($);
	
})( jQuery );

