<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="menu-navigation">
			<div class="inner-wrapper clearfix">
				<!-- <div class="nav-logo"></div> -->
				<h3>Jordan Keen Photography</h3>

				<button class="mobile-menu-button"></button>

			</div>
		</div>

		
		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'primary'
		)); ?>
	
	</div> <!-- /.container -->
</header><!--/.header-->

