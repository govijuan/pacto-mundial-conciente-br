<section class="ativistas-wrap col col-lg-6 col-md-6">
<div>
	<h2>ATIVISTAS</h2>
	<div class="component photogrid clearfix">
	<?php 	$activistas_args = array('post_type' => 'activistas', 'posts_per_page' => '10');
			$activistas_loop = new WP_Query( $activistas_args );
			while ($activistas_loop->have_posts()) : $activistas_loop->the_post(); ?>
			<a href="<?php the_permalink() ?>" class="col col-lg-15 col-md-15 col-sm-6 col-xs-12">
				<?php the_post_thumbnail('thumbnail', array('data-toggle' => 'tooltip', 'data-original-title'=> the_title( '', '', false ))); ?>
			</a>
			<?php endwhile; ?>
	</div><!-- Fim da .component.photogrid -->
</div>
</section><!-- Fim da .ativistas-wrap-->