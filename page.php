
<?php get_header(); ?>

<div id="main">

	<h1 class="text"><?php the_title(); ?></h1>
	

	<?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="text">
        <?php the_content(); ?>
        </div>
    <?php
    endwhile; //resetting the page loop
	?>
</div>

<?php get_footer(); ?>
