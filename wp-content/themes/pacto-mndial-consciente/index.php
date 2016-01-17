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
					<nav class="barra-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
				<div class="clearfix"></div>
			</header>
			<div class="site-conteudo">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<?php
						if ( is_home() &&  is_front_page() ) :

								/*
								* Inclui o banner de destaques só para a página de inicio.
								*/
								get_template_part( 'destaque', 'none' );

						endif;

						if ( have_posts() ) :



							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</main><!-- #main-->
				</div><!-- #primari-->

			</div><!-- .site-conteudo -->
			<footer class="site-footer">
				<div class="informacoes-site">
					<?php printf( esc_html__( '&copy; 2016 %1$s - Desenvolvido por %2$s.', 'pacto-mundial-consciente' ), 'Pacto Mundial Consciente Brasil', '<a href="http://jccriacaodesites.com/" rel="designer">JC Cria&ccedil;&atilde;o de Sites</a>' ); ?>
				</div>
			</footer><!--.site-footer -->
		</div><!-- .page -->
		<?php wp_footer(); ?>
	</body>

</html>
