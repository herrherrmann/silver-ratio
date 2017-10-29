<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Cantata+One|Josefin+Sans:400,600,700" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-title">
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> — <?php bloginfo('description'); ?>" rel="home">
				Herr
				<br>Herrmann
			</a>
		</header>
		<div class="body">
			<nav class="menu-main" aria-label="Main Menu">
				<?php wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'container'      => false
				)); ?>
			</nav>
			<main class="content">
