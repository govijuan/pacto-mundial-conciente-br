jQuery(document).ready(function($){
	
	// Logo en Blanco y Negro
	$("input[id='upload_image_logo_button']").click(function(e){
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		var id = button.attr('id').replace('_button', '');
		wp.media.editor.send.attachment = function(props, attachment){
		 $('#our-logo-upload').val(attachment.url);
		 wp.media.editor.send.attachment = send_attachment_bkp;
		};
		
		wp.media.editor.open(button);
		return false;
	});
		//Logo para Mobile
	$("input[id='upload_image_mobile_logo_button']").click(function(e){
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		var id = button.attr('id').replace('_button', '');
		wp.media.editor.send.attachment = function(props, attachment){
		 $('#our-logo-mobile-upload').val(attachment.url);
		 wp.media.editor.send.attachment = send_attachment_bkp;
		};
		
		wp.media.editor.open(button);
		return false;
	});
	//Imagem Para Fundo do Site
	$("input[id='upload_f_bg_image_button']").click(function(e){
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		var id = button.attr('id').replace('_button', '');
		wp.media.editor.send.attachment = function(props, attachment){
			$("#our-bg-img").val(attachment.url);
			wp.media.editor.send.attachment = send_attachment_bkp;
		};
		
		wp.media.editor.open(button);
		return false;
	});
});