<?php

get_header(); ?>


<div id="main">

	<div class="content">
	<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
			comments_template('', true);
			endif;

		endwhile; // End of the loop.
	?>
	</div>

</div><!-- #main -->


<?php get_footer();
