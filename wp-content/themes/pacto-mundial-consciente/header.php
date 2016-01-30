<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8" />
		<title><?php bloginfo('title')?></title>
		<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/	html5.js"></script><![endif]-->
		<!--[if lte IE 7]>
		<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		<!--[if lt IE 7]>

		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="page">
			<header class="site-header">
				<div class="margin-wrap">
					<a href="<?php echo home_url('/');?>" class="logo-container" rel="home" title="Pacto Mundial Consciente">
					<img src="<?php echo get_option('govi_logo');?>" class="logo-img" />
					</a>
					<div class="social-midia-on-h">
						<a href="mailto:<?php echo get_option('our_email');?>"><span class="contact-email-link fi-mail" ></span></a>
						<a href="<?php echo get_option('govi_facebook_link');?>"><span class="facebook-link fi-social-facebook" ></span></a>
						<a href="<?php echo get_option('govi_twitter_link');?>"><span class="twitter-link fi-social-twitter" ></span></a>
					</div>
					<nav class="barra-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
				<div class="clearfix"></div>
			</header>