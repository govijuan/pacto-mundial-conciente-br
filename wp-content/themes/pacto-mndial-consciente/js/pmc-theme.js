jQuery(document).ready(function($){
//jQuery('div.destaque-wrap div.destaque:nth-child(2), div.destaque-wrap div.destaque:nth-child(3), div.destaque-wrap div.destaque:nth-child(4)').addClass('destaque-scrolled');
$('.destaque-wrap div.destaque:nth-child(2), .destaque-wrap div.destaque:nth-child(3), .destaque-wrap div.destaque:nth-child(4)').wrapAll('<div class="destaque-scrolled"></div>');


});
