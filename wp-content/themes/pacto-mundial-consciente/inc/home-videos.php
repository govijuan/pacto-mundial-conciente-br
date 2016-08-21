<div class="videos-wrap col col-lg-12 col-md-12">
		<h2>VIDEOS</h2>
		<article class="video-obj-wrap col col-lg-6 col-md-6">
			<div class="video-wrap embed-responsive embed-responsive-16by9">
				<?php 	$your_YouTube_url = 'https://www.youtube.com/watch?v=47h_xlhFG7U';
						echo wp_oembed_get( $your_YouTube_url );
				?>
			</div>
			<div class="video-obj-txt">
				V&iacute;deo institucional do Pacto Mundial Consciente
			</div>
		</article>
		<?php $args = array( 'post_type' => 'videos', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
			<article class="video-obj-wrap col col-lg-6 col-md-6">
				<div class="video-wrap embed-responsive embed-responsive-16by9">
					<?php $codigo_video = the_field('codigo_insercao_video'); 
						echo wp_oembed_get( $codigo_video );
					?>
				</div>
				<div class="video-obj-txt">
				<?php the_excerpt();?>
				</div>
			</article>	
			<?php
			endwhile;
			?>
</div><!-- Fim da .videos-wrap-->