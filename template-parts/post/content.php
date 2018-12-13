

<article id="post-<?php the_ID(); ?>">


	<?php
						
		if ( is_single() ) {
			?><a href="<?php the_post_thumbnail_url('full'); ?>">
				<div class="crop"><?php the_post_thumbnail( 'large' );?></div>
			</a><?php 
			the_title( '<h1 class="postTitle">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			?><a href="<?php the_post_thumbnail_url('full'); ?>">
				<?php the_post_thumbnail( 'medium' );?>
			</a><?php
			the_title( '<h2 class="postTitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			?><a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php the_post_thumbnail( 'medium' );?>
			</a><?php
			the_title( '<h2 class="postTitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
	
	

	<div class="contentText">
		<?php the_content(); ?>
	</div>
	
	<span class="postDate"><?php the_time('j. F, Y'); echo " "; the_author_posts_link()?></span>
	
	

</article><!-- #post-## -->


<?php
