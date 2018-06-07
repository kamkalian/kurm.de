<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
<meta name="p:domain_verify" content="c9a813191d3b4f02aa93c40576a9e7fe"/>
    
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	 
	<title><?php wp_title(); ?></title>
	 
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	 
	<?php wp_head(); ?>

    
</head>
<body>
 
<div id="wrapper">
    
	<div id="header" class="horizontal alignBottom noWrap spaceBetween">
		
		<?php
		the_custom_logo();
		if ( is_single() || is_archive() || is_page()) {
			?><div class="padding"><a href="http://www.kurm.de" class="whiteLinkText spaceRight">kurm.de</a></div><?php
		} elseif ( is_front_page() && is_home() ) {
			?><h1><a href="https://www.kurm.de" class="whiteLinkText spaceRight">kurm.de</a></h1><?php
		} else {
			?><h1><a href="https://www.kurm.de" class="whiteLinkText spaceRight">kurm.de</a></h1><?php
		}
		?>
	   
	</div>
   <div class="row fullWidth bgWhite spaceBetween alignCenter">
	   <div>
	   <?php
		  wp_nav_menu( array(
		'theme_location' => 'header-menu',
		'container' => '',
		'fallback_cb' => '__return_false'
		) );
	   ?>
	   </div>
	   <div class="menu">
	   	<li><a href="https://www.youtube.com/user/kurmde" target="_blank"><img src="https://www.kurm.de/wp-content/uploads/2017/05/YouTube-logo-full_color-1-150x150.png" width="50px" height="50px" alt="Youtube"></a></li>
	   	<li><a href="https://www.facebook.com/FamilieKurm/" target="_blank"><img src="https://www.kurm.de/wp-content/uploads/2017/05/FB-f-Logo__blue-150x150.png" width="50px" height="50px" alt="Facebook"></a></li>
	   	<li><a href="https://twitter.com/kurm_de" target="_blank"><img src="https://www.kurm.de/wp-content/uploads/2017/05/TwitterLogo-1.png" width="50px" height="50px" alt="Twitter"></a></li>
	   </div>
   </div>
