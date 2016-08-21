<section class="visite-wrap col col-lg-12 col-md-12">
<div>
	<h2>VISITE</h2>
	<?php 	$parceiros_args = array('post_type' => 'visite', 'posts_per_page' => '10');
			$parceiros_loop = new WP_Query( $parceiros_args );
			while ($parceiros_loop->have_posts()) : $parceiros_loop->the_post(); ?>
			<a href="<?php the_field('link_de_parceiro') ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
			<?php endwhile; ?>
</div>
</section><!-- Fim da .visite-wrap-->