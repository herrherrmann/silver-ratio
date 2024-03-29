<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-title">
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> &mdash; <?php bloginfo('description'); ?>" rel="home">
				Herr
				<br>Herrmann
			</a>
		</header>
		<div class="body">
			<nav class="main-menu" aria-label="Main menu">
				<?php wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'container'      => false
				)); ?>
				<?php if ( dynamic_sidebar('sidebar') ) : else : endif; ?>
			</nav>
			<div class="main-menu-divider" aria-hidden="true"></div>
			<main class="content">
				<div class="content-inner">
