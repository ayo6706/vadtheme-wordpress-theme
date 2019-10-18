<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php wp_head(); ?>
</head>
	<body <?php body_class();?>>



		<div id="slideout-menu">
		<ul>
		<li>
		
		
		<a href="<?php echo site_url(''); ?>">Home</a>
		</li>
		<li>
		<a href="<?php echo site_url('/blog'); ?>">Blog</a>
		</li>
		<li>
		<a href="<?php echo site_url('/projects'); ?>">Projects</a>
		</li>
		<li>
		<a href="<?php echo site_url('/about'); ?>">About</a>
		</li>
		<li>
		<input type="text" placeholder="Search Here">
		</li>
		</ul>
		</div>
		
		<nav>
		<div id="logo-img">
	
		<!--<img src="img/logo.png" alt="Vadtheme">--> 
		<?php 
			$custom_logo_id = the_custom_logo();
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
				
					
			}else 
			{
			echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
			}
		
		
		?>
	
		</div>
		<div id="menu-icon">
		<i class="fa fa-bars"></i>
		</div>
		<ul>
		
		 <?php wp_nav_menu(
		array(
	
		'menu_id'        => 'Main Navigation',
	
	
		)
		); ?>
		
	
		
	
		<li>
		<div id="search-icon">
		<i class="fa fa-search"></i>
		</div>
		</li>
		</ul>
		</nav>
		
		<div id="searchbox">
		<input type="text" placeholder="Search Here">
		</div>