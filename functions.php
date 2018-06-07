<?php

//update_option( 'siteurl', 'http://wp-themes.kurm.de' );
//update_option( 'home', 'http://wp-themes.kurm.de' );



function footerLeft_widgets_init() {
	register_sidebar(array(
			'name'          => __( 'Fusszeile linker Bereich', 'familyTheme' ),
			'id'            => 'sidebar-left',
			'description'   => __( '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'footerLeft_widgets_init' );

function footerCenter_widgets_init() {
	register_sidebar(array(
			'name'          => __( 'Fusszeile mittlerer Bereich', 'familyTheme' ),
			'id'            => 'sidebar-center',
			'description'   => __( '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'footerCenter_widgets_init' );

function footerRight_widgets_init() {
	register_sidebar(array(
			'name'          => __( 'Fusszeile rechter Bereich', 'familyTheme' ),
			'id'            => 'sidebar-right',
			'description'   => __( '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'footerRight_widgets_init' );

function welcome_sidebar_widgets_init() {
	register_sidebar(array(
			'name'          => __( 'Seitenleiste Links neben dem aktuellen Beitrag', 'familyTheme' ),
			'id'            => 'welcome-sidebar',
			'description'   => __( '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'welcome_sidebar_widgets_init' );

function twitter_sidebar_widgets_init() {
	register_sidebar(array(
			'name'          => __( 'Seitenleiste rechts neben dem aktuellen Beitrag', 'familyTheme' ),
			'id'            => 'twitter-sidebar',
			'description'   => __( '' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twitter_sidebar_widgets_init' );





function kb_theme_setup() {
	add_theme_support('custom-logo', array(
			'height' => 85,
			'width' => 300,
			'flex-height' => true,
			'flex‐width' => true,));
}
add_action('after_setup_theme','kb_theme_setup');

add_theme_support('post-thumbnails');

/**
 * Registers the menu
 */
function family_menus() {
	register_nav_menus( array(
			'header-menu' => __( 'Header Menu', 'familyTheme' ),
	) );
}
add_action( 'init', 'family_menus' );



/*
 * Für den Geschützten Bereich
 */

function my_password_form() {
	
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<div class="content contentText"><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "Dieser Bereich ist geschützt.<br>" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form></div>
    ';
	return $o;
}
add_filter( 'the_password_form', 'my_password_form' );


/*
 * Eine eigene Kommentar Funktion
 */
function custom_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch( $comment->comment_type ) :
		case 'pingback' :
        case 'trackback' : ?>
            <li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
            <div class="back-link"><?php comment_author_link(); ?></div>
        <?php break;
        default : ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            
	            <div class="row flex-start">
	            	 <?php echo get_avatar( $comment, 100 ); ?>
	            	 <div class="spaceLeft">
	            	 	<?php comment_text(); ?>
	            	 	<p><?php 
			            comment_reply_link( array_merge( $args, array( 
			            'reply_text' => 'Antworten',
			            'after' => '', 
			            'depth' => $depth,
			            'max_depth' => $args['max_depth'] 
			            ) ) ); ?></p>
	            	 </div>
	            </div>
	           
	            <div class="right postDate col">
	            	<time <?php comment_time( 'c' ); ?> class="comment-time">
			            <span class="date">
			            	<?php comment_date(); ?>
			            </span>
			            <span class="time">
			            	<?php comment_time(); ?>
			            </span>
		            </time>
		            <a href="<?php echo get_comment_author_url( $comment );?>"><?php comment_author(); ?></a>
	            </div>
	            
	            
	            
	         </li><?php
            break;
    endswitch;
}


?>
