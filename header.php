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
			<div class="inner-wrapper">
				<div class="nav-logo"></div>

				<button class="mobile-menu-button"></button>

			</div>
		</div>

		<div class="menu">
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'primary'
			)); ?>
		</div>
	</div> <!-- /.container -->
</header><!--/.header-->

