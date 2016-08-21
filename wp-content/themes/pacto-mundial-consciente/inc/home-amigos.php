<section class="amigos-wrap col col-lg-6 col-md-6">
<div>
	<h2>AMIGOS</h2>
	<div id="homeCarrousel" class="homeCarrousel carrousel slide" data-ride="carousel">
		<div class="carousel-inner">
		<?php 	$amigos_args = array('post_type' => 'amigos', 'posts_per_page' => '8');
				$amigos_loop = new WP_Query( $amigos_args );
				while ($amigos_loop->have_posts()) : $amigos_loop->the_post(); ?>
				<article class="col col-lg-3 col-md-3">
					<a href="<?php the_permalink() ?>">
						<div class="amigo-thumb-wrap">
							<?php the_post_thumbnail(); ?>
						</div>
					</a>
				</article>
				<?php endwhile; ?>
		</div><!-- Fim da .carousel-inner-->
		  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			 <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>		-->
	</div><!-- Fim da #homeCarrousel-->
</div>
</section><!-- Fim da .amigos-wrap-->