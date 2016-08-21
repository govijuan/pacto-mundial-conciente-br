			<?php get_header()?>
			<div class="site-conteudo">

				<div id="primary" class="content-area">
					<main id="main" class="site-main container" role="main">
											<?php
						if ( is_home() &&  is_front_page() ) :

								/*
								* Inclui o banner de destaques só para a página de inicio.
								*/
								get_template_part( 'destaque', 'none' );
						?>
						<div class="eventos-videos row">
							<?php get_template_part('inc/home', 'eventos');?>
							<section class="videos-garimpo col col-lg-6 col-md-6 row">
								<?php get_template_part('inc/home', 'videos');?>
								<?php get_template_part('inc/home', 'garimpo');?>
							</section>
						</div><!-- Fim da .eventos-videos .row-->
						<div class="amigos-ativistas row">
							<?php get_template_part('inc/home', 'amigos');?>
							<?php get_template_part('inc/home', 'ativistas');?>
						</div><!-- Fim da .amigos-ativistas .row-->
						<div class="visite row">
							<?php get_template_part('inc/home', 'visite');?>
						</div><!-- Fim da .visite .row-->
						<?php
						
						else :	
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
	
							endif;
						endif; ?>
					</main><!-- #main-->
				</div><!-- #primari-->

			</div><!-- .site-conteudo -->
			<?php get_footer()?>
