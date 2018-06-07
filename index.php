<?php get_header(); ?>

<div id="main">


	
		<?php 
		$i=0;
		if (have_posts()) : while (have_posts()) : the_post(); 
			if(!in_category('Pinnwand') || in_category('Fotoblog')){
				?><a href="<?php the_permalink() ?>" class="content relative" >
					<?php
						if(has_post_thumbnail()) {
							the_post_thumbnail( 'large' );
						}
					?>
					<span class="postMarker postMarkerTitle"><?php the_title(); ?></span>
					<span class="postMarker postMarkerDate"><?php the_time('j. F, Y'); ?></span>
				</a>
				<?php
			$i++;
			}
			if($i>0) break;
			
		endwhile;
		endif; ?>
	
				
		
	<div class="content">
   
	<?php 
	if ( is_active_sidebar( 'welcome-sidebar' ) ) {
		?><div id="welcomeSidebar"><?php
		dynamic_sidebar( 'welcome-sidebar' );
		?></div><?php
	}
	?>
	
	</div>
			
		
	
	
	<div class="row flex-start">
	<?php 
	if (have_posts()) : while (have_posts()) : the_post(); 
	
		if(!in_category('Pinnwand')){
			if($i>3) break;
			?><div class="content startSmallPost"><?php
			?><a href="<?php the_permalink() ?>">
				<?php
					if(has_post_thumbnail()) {
						the_post_thumbnail( 'medium' );
					}
				?>
				<span class="postMarker postMarkerTitle"><?php the_title(); ?></span>
				<span class="postMarker postMarkerDate"><?php the_time('j. F, Y'); ?></span>
			</a>
			</div><?php 
			$i++;
		}
		
	endwhile;
	endif; ?>
	</div>
	
	
</div><!-- main -->
<?php get_footer(); ?>