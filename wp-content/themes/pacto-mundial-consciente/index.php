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
							<section class="eventos-wrap col col-lg-6 col-md-6">
								
								<?php dynamic_sidebar('campo-eventos-home'); ?>
								
							</section><!-- Fim da .eventos-wrap-->
							<section class="videos-garimpo col col-lg-6 col-md-6 row">
							<div class="videos-wrap col col-lg-12 col-md-12">
								<h2>VIDEOS</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in elit vitae massa sagittis vulputate eu ut risus. Nunc finibus ex et massa accumsan, ac facilisis lorem hendrerit. Duis vehicula nibh nec neque volutpat consectetur. Quisque tempus molestie felis, ut facilisis ipsum porta quis. Nulla eget laoreet nulla, sed mattis libero. Aliquam ac tincidunt risus, non volutpat ipsum. Curabitur efficitur, sem id mattis fermentum, arcu metus varius ante, ut vehicula augue nibh nec libero. Phasellus faucibus ex at libero suscipit rutrum. Pellentesque nec tempor tellus, in auctor est.
			
											Suspendisse nunc augue, ultricies nec risus nec, pulvinar ornare tellus. Phasellus id porta dui, eu malesuada ipsum. Vestibulum vestibulum nisi in mi pretium facilisis. Curabitur pellentesque accumsan tincidunt. Vivamus lobortis, nisl at porta iaculis, lectus quam varius massa, id auctor purus sem ut sem. Sed quis arcu nec mi laoreet volutpat convallis nec arcu. Integer tortor libero, tincidunt id suscipit a, hendrerit nec dolor. Nullam finibus nunc velit, eget luctus metus volutpat et.
											
											
										</p>
							</div><!-- Fim da .videos-wrap-->
							<div class="garimpo-wrap col col-lg-12 col-md-12">
								<h2>GARIMPO</h2>
								<p>
									Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ut elit pellentesque, sodales nulla vitae, venenatis mi. Nullam a aliquam odio, id congue est. Praesent posuere placerat orci, eu euismod ante faucibus vel. In in ligula at enim tempor fermentum. Nunc nec finibus enim, in maximus justo. Vestibulum commodo hendrerit erat. Nam ut pretium tellus, nec viverra metus. Nullam at ipsum in elit varius efficitur. Fusce vitae gravida tellus, at ornare lectus. Donec ut dui dolor. Cras quis tortor tempor, congue ligula id, viverra augue. Etiam est dolor, mollis sed leo molestie, cursus gravida est. Fusce ultrices sagittis arcu vel elementum. Aenean ultricies molestie euismod.
											
											Sed rutrum ullamcorper felis, sit amet porttitor lacus porttitor a. Suspendisse sed feugiat lacus. Maecenas nunc justo, congue sit amet ultrices ac, venenatis nec orci. Vestibulum et justo odio. Phasellus non imperdiet enim, eu accumsan tortor. Aenean placerat odio ipsum, a ullamcorper risus interdum et. Nulla aliquet faucibus felis pretium luctus. Pellentesque maximus, quam vel varius mattis, quam elit iaculis lacus, at pulvinar metus ante in neque. Cras in orci lacus. Cras eget cursus purus.
								</p>
							</div>
							</section>
						</div><!-- Fim da .eventos-videos .row-->
						<div class="amigos-ativistas row">
							<section class="amigos-wrap col col-lg-6 col-md-6">
							<h2>AMIGOS</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in elit vitae massa sagittis vulputate eu ut risus. Nunc finibus ex et massa accumsan, ac facilisis lorem hendrerit. Duis vehicula nibh nec neque volutpat consectetur. Quisque tempus molestie felis, ut facilisis ipsum porta quis. Nulla eget laoreet nulla, sed mattis libero. Aliquam ac tincidunt risus, non volutpat ipsum. Curabitur efficitur, sem id mattis fermentum, arcu metus varius ante, ut vehicula augue nibh nec libero. Phasellus faucibus ex at libero suscipit rutrum. Pellentesque nec tempor tellus, in auctor est.
			
											Suspendisse nunc augue, ultricies nec risus nec, pulvinar ornare tellus. Phasellus id porta dui, eu malesuada ipsum. Vestibulum vestibulum nisi in mi pretium facilisis. Curabitur pellentesque accumsan tincidunt. Vivamus lobortis, nisl at porta iaculis, lectus quam varius massa, id auctor purus sem ut sem. Sed quis arcu nec mi laoreet volutpat convallis nec arcu. Integer tortor libero, tincidunt id suscipit a, hendrerit nec dolor. Nullam finibus nunc velit, eget luctus metus volutpat et.
							</p>
							</section><!-- Fim da .amigos-wrap-->
							<section class="ativistas-wrap col col-lg-6 col-md-6">
								<h2>ATIVISTAS</h2>
								<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in elit vitae massa sagittis vulputate eu ut risus. Nunc finibus ex et massa accumsan, ac facilisis lorem hendrerit. Duis vehicula nibh nec neque volutpat consectetur. Quisque tempus molestie felis, ut facilisis ipsum porta quis. Nulla eget laoreet nulla, sed mattis libero. Aliquam ac tincidunt risus, non volutpat ipsum. Curabitur efficitur, sem id mattis fermentum, arcu metus varius ante, ut vehicula augue nibh nec libero. Phasellus faucibus ex at libero suscipit rutrum. Pellentesque nec tempor tellus, in auctor est.
			
											Suspendisse nunc augue, ultricies nec risus nec, pulvinar ornare tellus. Phasellus id porta dui, eu malesuada ipsum. Vestibulum vestibulum nisi in mi pretium facilisis. Curabitur pellentesque accumsan tincidunt. Vivamus lobortis, nisl at porta iaculis, lectus quam varius massa, id auctor purus sem ut sem. Sed quis arcu nec mi laoreet volutpat convallis nec arcu. Integer tortor libero, tincidunt id suscipit a, hendrerit nec dolor. Nullam finibus nunc velit, eget luctus metus volutpat et.
							</p>
							</section><!-- Fim da .ativistas-wrap-->
						</div><!-- Fim da .amigos-ativistas .row-->
						<div class="visite row">
							<section class="visite-wrap col col-lg-12 col-md-12">
							<h2>VISITE</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in elit vitae massa sagittis vulputate eu ut risus. Nunc finibus ex et massa accumsan, ac facilisis lorem hendrerit. Duis vehicula nibh nec neque volutpat consectetur. Quisque tempus molestie felis, ut facilisis ipsum porta quis. Nulla eget laoreet nulla, sed mattis libero. Aliquam ac tincidunt risus, non volutpat ipsum. Curabitur efficitur, sem id mattis fermentum, arcu metus varius ante, ut vehicula augue nibh nec libero. Phasellus faucibus ex at libero suscipit rutrum. Pellentesque nec tempor tellus, in auctor est.

							</p>
							</section><!-- Fim da .visite-wrap-->
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
