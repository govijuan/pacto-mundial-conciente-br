<div class="garimpo-wrap col col-lg-12 col-md-12">
	<h2>GARIMPO</h2>
	<?php $args = array( 'post_type' => 'links', 'posts_per_page' => 4 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();?>
		<article class="link-obj-wrap col col-lg-6 col-md-6">
			<a class="garimpo-link" href="<?php the_field('link-garimpo'); ?>" target="_blanc">
			<div class="gar-link-img-wrap" style="height: 186px; overflow: hidden">
				<?php the_post_thumbnail('miniatura-garimpo');?>
			</div>
			<div class="gar-link-title-wrap"><?php the_title();?></div>
			</a>
		</article>	
		<?php
		endwhile;
		?>
</div>