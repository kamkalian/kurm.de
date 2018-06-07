<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area contentText">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2>
		
		<?php
		$comments_number = get_comments_number();
		if ( '1' === $comments_number ) {
			echo "1 Kommentar";
		} else {
			echo $comments_number." Kommentare";
		}
		?>
	
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
			'callback' => 'custom_comments',
			'style' => 'ol'
 			) );
			?>
		</ol>

		<?php 
	else : echo "<h2>0 Kommentare</h2>Sei der erste und gib einen Kommentar ab...";
	
	endif; // Check for have_comments().

	?><br><br><?php 
	comment_form();
	?>

</div><!-- #comments -->
