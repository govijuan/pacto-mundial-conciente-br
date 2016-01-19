<?php
	/* ------------To make a menu item for the teme options---------------------------*/
	add_action('admin_menu', 'govi_theme_menu');
	function govi_theme_menu (){
		$page_title = "PMC Op&ccedil;&otilde;es do Tema";
		$menu_title = "PMC Op&ccedil;&otilde;es do Tema";
		$capability = "administrator";
		$menu_slug = "pmc-theme-settings";
		$function = "govi_main_theme_menu";
		//$icon_url = get_template_directory_uri(). "/admin/images/settings_icon.png";

		//add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url);
		$add_theme_admin_page = add_theme_page ($page_title, $menu_title, $capability, $menu_slug, $function);

		/* ------------------------Code for loading the the theme options scripts only in the theme options' page starts Here------------*/
		add_action( 'load-' . $add_theme_admin_page, 'load_admin_js' );
	}
	/*only in the theme options' page*/
	function load_admin_js(){
		add_action( 'admin_enqueue_scripts', 'govi_enque_script' );
	}
	/*only in the theme options' page
	function enqueue_admin_js(){
        // Isn't it nice to use dependencies and the already registered core js files?
        wp_enqueue_script( 'my-script', INCLUDES_URI . '/js/my_script.js', array( 'jquery-ui-core', 'jquery-ui-tabs' ) );
    }*/

	function add_my_favicon(){
		echo '<link rel="icon" type="image/png" href="'.get_option('govi_favicon'). '" >';
	}
	add_action('admin_head', 'add_my_favicon');

	function govi_main_theme_menu(){
		$current_user = wp_get_current_user();
		$user_id = $current_user->ID;
		if(!user_can( $user_id, 'create_users'))
			return false;

	?>
<div class="wrap govi-panel-wrap">
	<div class="govi-admin-title-wrap"><h2>PMC Op&ccedil;&otilde;es do Tema</h2></div>
	<div class="settings-top-strip"><a id="general-button" class="general-save-button" href="#">Salvar Op&ccedil;&otilde;es</a></div>
	<div id="tabs">
		<ul>
			<li><a rel="govi-generla-settings" href="#govi-general-settings">Op&ccedil;&otilde;es Gerais</a></li>
			<li><a rel="govi-homepage-settings" href="#govi-home-settings">P&aacute;gina de Inicio</a></li>
			<li><a  rel="govi-contact-links" href="#govi-contact-links">Links de Contato</a></li>
			<li><a  rel="govi-element-settings" href="#govi-element-setings">Elementos</a></li>
			<li><a rel="govi-color-picker-elements-tab" href="#govi-social-midia">Redes Sociais</a></li>
		</ul>

	<?php 	general_settings ();
			govi_home_settings ();
			govi_contact_links();
			govi_element_settings ();
			govi_social_midia_links ();
	?>
</div>
<div class="settings-bottom-strip"><a id="general-button" class="general-save-button" href="#">Salvar Op&ccedil;&otilde;es</a></div>
</div>

<?php }
    /*only in the theme options' page*/
	function govi_enque_script(){
		wp_enqueue_script('jquery');
		wp_enqueue_media();
		wp_enqueue_script('govi-framework-tabs', get_template_directory_uri()."/js/govi-featured.js", array('jquery') );
		wp_enqueue_script('govi-js-ui-script', get_template_directory_uri(). "/js/jquery-ui.js");
		wp_enqueue_script('govi-my-script', get_template_directory_uri(). "/js/admin-ajax-saving.js");
		wp_enqueue_style( 'govi-js-ui-style', get_template_directory_uri()."/css/jquery-ui.css");
		wp_enqueue_style( 'govi-js-ui-style-structure', get_template_directory_uri()."/css/jquery-ui.structure.css");
		wp_enqueue_style( 'govi-js-ui-style-theme', get_template_directory_uri()."/css/jquery-ui.theme.css");
		wp_enqueue_style( 'govi-js-ui-admin-style', get_template_directory_uri()."/css/admin.css");

	}
	/*-------------------------------------only in the theme options' page ends here---------------------------*/
	//add_action('admin_init', 'govi_enque_script');

	function general_settings (){ ?>

		<div id="govi-general-settings" class="govi-element">
			<div class="panel-body">
				<h2>Op&ccedil;&otilde;es Gerais</h2>
				<!-- Input Field -->
				<!-- Logo Upload -->
				<label for="our-logo-upload">Subir Imagem de Logotipo:</label>
				<input type="text" id="our-logo-upload" name="our-logo-upload" value="<?php echo get_option('govi_logo'); ?>"/> <input type="button" id="upload_image_logo_button" value="Subir Imagem"/>
				<!-- Logo for Mobile Upload -->
				<label for="our-logo-mobile-upload">Subir Imagem de Logotipo em tamanho para dispositivos m&oacute;veis:</label>
				<input type="text" id="our-logo-mobile-upload" name="our-logo-mobile-upload" value="<?php echo get_option('govi_mobile_logo'); ?>"/> <input type="button" id="upload_image_mobile_logo_button" value="Subir Imagem"/>
				<!-- Subir Imagen de Fundo do site -->
				<label for="our-bg-img">Subir Imagem de Fundo para o Layout Geral:</label>
				<input type="text" id="our-bg-img" name="our-bg-img" value="<?php echo get_option('govi_bg_image'); ?>"/> <input type="button" id="upload_f_bg_image_button" value="Subir Imagen"/>
				<!-- Google Analytics Code Input Space -->
				<label>C&oacute;digo do Google Analytics</label>
				<textarea id="our-analytics"><?php if( get_option('govi_analytics') == ""){ echo "Copie y pegue su c&oacute;digo de Google Analytics Aqu&iacute;!";} else { echo get_option('govi_analytics');} ?>
				</textarea>

				
			</div> <!-- Close panel-body div -->
			
		</div>


<?php
	}

	function govi_home_settings(){?>
		<div id="govi-home-settings" class="govi-element">
			<div class="panel-body">
				<h2>Op&ccedil;&otilde;es da P&aacute;gina de Inicio</h2>
				
			</div>
		</div>

	<?php
	}

	function govi_contact_links() {?>
		<div id="govi-contact-links" class="govi-element">
			<div class="panel-body">
				<h2>Links de Contato</h2>
				<label for="our-celphone-numbr">Digitar/Colar n&uacute;mero de celular para contato:</label>
				<input type="text" id="our-celphone-numbr" name="our-celphone-numbr" value="<?php echo get_option('our_celphone'); ?>"/>
				<label for="our-whatsapp-numbr">Digitar/Colar link de mensagem de texto no Whatsapp:</label>
				<input type="text" id="our-whatsapp-numbr" name="our-whatsapp-numbr" value="<?php echo get_option('our_whatsapp'); ?>"/>
				<label for="our-skype">Digitar/Colar nombre de usu&aacute;rio no Skype para contato:</label>
				<input type="text" id="our-skype" name="our-skype" value="<?php echo get_option('our_skype'); ?>"/>
				<label for="our-office-numbr">Digitar/Colar n&uacute;mero de telefone do escrit&oacute;rio:</label>
				<input type="text" id="our-office-numbr" name="our-office-numbr" value="<?php echo get_option('our_office_p_numbr'); ?>"/>
				<label for="our-email">Digitar/Colar endere&ccedil;o de e-mail para contacto (Vai ativar automaticamente o programa-cliente de e-mail, tais como Outlook, Mozilla Thunderbird, Mail, etc.):</label>
				<input type="text" id="our-email" name="our-email" value="<?php echo get_option('our_email'); ?>"/>
				<label for="our-adress">Digitar/Colar Endere&ccedil;on f&iacute;sico do escritorio:</label>
				<input type="text" id="our-adress" name="our-adress" value="<?php echo get_option('our_adress'); ?>"/>
			</div>
		</div>

	<?php
	}

	function govi_element_settings(){?>
		<div id="govi-element-setings" class="govi-element">
			<div class="panel-body">
				<h2>Op&ccedil;&otilde;es de Elementos</h2>
				<p>Here we put the content for the element settings or whatever.</p>
			</div>
		</div>

	<?php
	}

	function govi_social_midia_links(){?>
		<div id="govi-social-midia" class="govi-element">
			<div class="panel-body">
				<h2>Redes Sociais</h2>
				<label for="facebook-link">Digite ou cole o link de Facebook neste espa&ccedil;o:</label>
				<input type="text" id="facebook-link" name="facebook-link" value="<?php echo get_option('govi_facebook_link'); ?>"/><br>
				<label for="twitter-link">Digite ou cole o link de Twitter neste espa&ccedil;o:</label>
				<input type="text" id="twitter-link" name="twitter-link" value="<?php echo get_option('govi_twitter_link'); ?>"/><br>
				<label for="youtube-link">Digite ou cole o link do canal de Youtube neste espa&ccedil;o:</label>
				<input type="text" id="youtube-link" name="youtube-link" value="<?php echo get_option('govi_youtube_link'); ?>"/><br>
			</div>
		</div>
		<div id="save-message-general" style="display:none"></div>
	<?php
	}

	add_action('admin_footer', 'govi_js_init' );

	function govi_js_init(){
	?>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				$('#general-button').live('click', function(){
					var govilogo = $('#our-logo-upload').val();
					var govimobilelogo = $('#our-logo-mobile-upload').val()
					var govianalytics = $('#our-analytics').val();
					var govibgimage = $('#our-bg-img').val();
					var govicellphonecontact = $('#our-celphone-numbr').val();
					var goviwhatsappnumber = $('#our-whatsapp-numbr').val();
					var goviskypeuser = $('#our-skype').val();
					var goviofficephone = $('#our-office-numbr').val();
					var goviemailadress = $('#our-email').val();
					var govifisicaladress = $('#our-adress').val();
					var govifacebooklink = $('#facebook-link').val();
					var govitwitterlink = $('#twitter-link').val();
					var goviyoutubelink = $('#youtube-link').val();

					var data = {
						action: 'general_settings_action',
						govi_logo: govilogo,
						govi_mobile_logo:govimobilelogo,
						govi_analytics: govianalytics,
						govi_bg_image: govibgimage,
						our_celphone:govicellphonecontact,
						our_whatsapp:goviwhatsappnumber,
						our_skype:goviskypeuser,
						our_office_p_numbr:goviofficephone,
						our_email:goviemailadress,
						our_adress:govifisicaladress,
						govi_facebook_link: govifacebooklink,
						govi_twitter_link: govitwitterlink,
						govi_youtube_link: goviyoutubelink

					};

					$.post(ajaxurl, data, function(response){
						$('#save-message-general').html('Loading...');
						$('#save-message-general').show(1000);

					})
					.success(function(){})
					.error(function(){ alert("error");})
					.complete(function(){ $('#save-message-general').html('Op&ccedil;&otilde;es Salvas!').delay(2000).hide(3000); });
				});
			});

		</script>
	<?php
	}
	add_action('wp_ajax_general_settings_action', 'govi_general_settings_save');

	function govi_general_settings_save(){
		$govi_logo = $_POST['govi_logo'];
		$govi_mobile_logo = $_POST['govi_mobile_logo'];
		$govi_analytics = $_POST['govi_analytics'];
		$govi_bg_image = $_POST['govi_bg_image'];
		$our_celphone = $_POST['our_celphone'];
		$our_whatsapp = $_POST['our_whatsapp'];
		$our_skype = $_POST['our_skype'];
		$our_office_p_numbr = $_POST['our_office_p_numbr'];
		$our_email = $_POST['our_email'];
		$our_adress = $_POST['our_adress'];
		$govi_facebook_link = $_POST['govi_facebook_link'];
		$govi_twitter_link = $_POST['govi_twitter_link'];
		$govi_youtube_link = $_POST['govi_youtube_link'];

		update_option( 'govi_logo', $govi_logo );
		update_option( 'govi_mobile_logo', $govi_mobile_logo );
		update_option( 'govi_analytics', $govi_analytics );
		update_option('govi_bg_image', $govi_bg_image);
		update_option('our_celphone', $our_celphone);
		update_option('our_whatsapp', $our_whatsapp);
		update_option('our_skype', $our_skype);
		update_option('our_office_p_numbr', $our_office_p_numbr);
		update_option('our_email', $our_email);
		update_option('our_adress', $our_adress);
		update_option('govi_facebook_link', $govi_facebook_link);
		update_option('govi_twitter_link', $govi_twitter_link);
		update_option('govi_youtube_link', $govi_youtube_link);

		echo "Success";

		die;
	}
