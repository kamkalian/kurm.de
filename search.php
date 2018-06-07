<?php get_header(); ?>

<div id="main">



	<?php if ( have_posts() ) : ?>
			<h1 class="text"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="text"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?> :(</h1>
		<?php endif; ?>

	
		
		<div id="contentBottom">
		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			$i=0;
			while ( have_posts() ) : the_post();
				$i++;

			/*
			 * Für eine Ansicht bei der der erste Beitrag größer dargestellt wird 
			 *
				if($i==1) {
						?><div class="contentTop"><div class="content contentFirstPost"><?php
			   	}else if($i==2){
			   		?></div><div id="contentBottom"><div class="content contentSmallPost"><?php
			   	}else{
			   		?><div class="content contentSmallPost"><?php
			   	}
			   	
					get_template_part( 'template-parts/post/content', get_post_format() );
				?>
			*/
				
				?>
				<div class="content contentSmallPost">
					<?php get_template_part( 'template-parts/post/content', get_post_format() );?>
	     		</div>
				

			<?php endwhile;
			
			?></div><?php 

			?><div class="textCenter"><?php
			the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => __( 'Zurück', 'familyTheme' ),
					'next_text' => __( 'Weiter', 'familyTheme' ),	
			) );
			?></div><?php
			

		endif; ?>
		</div>
	
</div><!-- .main -->

<?php get_footer(); ?>
