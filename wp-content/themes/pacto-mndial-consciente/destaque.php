<?php global $more;
$more = 0; ?>
 
<?php
 
/* ID of your 'Breaking News' Category */
$destaque_cat = "2"; 
 
/* How many posts from above category to display? Default = 3 */
$destaque_num = "4"; 
 
/* Number of recent posts to display under the Breaking News */
$latest_num = "4";
  
/* IDs of any cats you dont want to include in Recent posts.
Start each ID with a 'minus' symbol Seperate by a comma.
EG: $latest_ignore = "7,-6,-8,-1";
Posts from the 'Breaking' category are automatically excluded. */
$latest_ignore = "-1"; 
?>
 
    <!-- Mostrar 4 Posts from Breaking News -->
    <div class="destaque-wrap">
    <?php query_posts('showposts='.$destaque_num.'&cat='.$destaque_cat.''); 
      while (have_posts()) : the_post();
    ?>
 
    <div class="destaque">
    	<div class="thumb-wrap">
	    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
        </a>
    	</div>
        <div class="txt-wrap">
        <div class="txt-categoria-dest"><?php the_category(', '); ?> </div>
        <h2><?php the_title(); ?></h2>
        <div class="postmeta">
            
        </div><!--.postmeta-->
        </div> 
    </div><!--.destaque-->
 
 
    <?php endwhile; ?>
    <div class="clearfix"></div>
    </div><!-- .destaque-wrap -->