(function(e){function u(){t>=1320?i=r-n:t<1320&&t>980&&(i=r);e("#primary-menu").css("width",i+"px");s=e("#primary-menu li").length;o=i/s;e("#primary-menu li").css("width",o+"px");e("#primary-menu li:nth-child(5n+1) a").addClass("hvr-bounce-to-top-am");e("#primary-menu li:nth-child(5n+2) a").addClass("hvr-bounce-to-top-lar");e("#primary-menu li:nth-child(5n+3) a").addClass("hvr-bounce-to-top-fuc");e("#primary-menu li:nth-child(5n+4) a").addClass("hvr-bounce-to-top-ver");e("#primary-menu li:nth-child(5n+5) a").addClass("hvr-bounce-to-top-azu")}function a(){if(t>=1320)e(".destaque").hover(function(){e(this).find(".thumb-wrap img").addClass("dest-hover-img")},function(){e(this).find(".thumb-wrap img").removeClass("dest-hover-img")});else if(t<1320&&t>980){e(".destaque-wrap > .destaque").hover(function(){e(this).find("img").addClass("dest-hover-img")},function(){e(this).find("img").removeClass("dest-hover-img")});e(".destaque-scrolled div.destaque").hover(function(){e(this).find("img").addClass("dest-hover-img-height")},function(){e(this).find("img").removeClass("dest-hover-img-height")})}}function f(){e(".menu").slicknav({label:""});e(".slicknav_menu").prependTo(".site-header .margin-wrap")}function l(){if(t<981){var n=(e(".margin-wrap").width()-180)/2;e("a.logo-container").css("left",n+"px")}}function c(){e("#toTop").click(function(){e("html, body").animate({scrollTop:0},600);return!1})}var t=e(window).width(),n=e(".logo-container").innerWidth(),r=e(".margin-wrap").innerWidth(),i,s,o;e(document).ready(function(e){e(".destaque-wrap div.destaque:nth-child(2), .destaque-wrap div.destaque:nth-child(3), .destaque-wrap div.destaque:nth-child(4)").wrapAll('<div class="destaque-scrolled"></div>');u();a();f();l();c()});e(window).resize(function(){u()})})(jQuery);