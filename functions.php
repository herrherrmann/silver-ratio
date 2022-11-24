<?php
if ( ! isset( $content_width ) ) $content_width = 800;

function silver_ratio_load_theme_textdomain() {
	load_theme_textdomain( 'silver-ratio', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'after_setup_theme', 'silver_ratio_load_theme_textdomain' );

function silver_ratio_automatic_feed_links_support() {
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'silver_ratio_automatic_feed_links_support' );

function silver_ratio_title_tag_support() {
	add_theme_support( 'title-tag' );
}
add_action( 'init', 'silver_ratio_title_tag_support' );

function silver_ratio_custom_background_support() {
	$custom_background_args = array( 'default-color' => 'f4f4f4' );
	add_theme_support( 'custom-background', $custom_background_args );
}
add_action( 'init', 'silver_ratio_custom_background_support' );

function silver_ratio_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );
	return $title;
}
add_filter( 'wp_title', 'silver_ratio_wp_title', 10, 2 );

function silver_ratio_menus() {
	register_nav_menu('main-menu', 'Main Menu' );
	register_nav_menu('footer-menu', 'Footer Menu' );
}
add_action( 'init', 'silver_ratio_menus' );

function silver_ratio_widgets() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'silver-ratio' ),
		'id' => 'sidebar',
		'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'silver-ratio' ),
	) );
}
add_action( 'widgets_init', 'silver_ratio_widgets' );

function silver_ratio_style() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'silver_ratio_style' );

add_filter( 'use_default_gallery_style', '__return_false' );

function silver_ratio_editor_style() {
	add_editor_style( 'style-editor.css' );
}
add_action( 'init', 'silver_ratio_editor_style' );

/* Include page content with show_page_content function. */
function show_page_content( $path ) {
	$post = get_page_by_path( $path );
	$content = apply_filters( 'the_content', $post->post_content );
	echo $content;
}
add_action( 'init', 'show_page_content' );

/* Highlight active custom post page in menu. */
add_filter( 'nav_menu_css_class', 'silver_ratio_menu_classes', 10, 2 );
function silver_ratio_menu_classes( $classes , $item ) {
	if ( get_post_type() == 'software' && $item->title == 'Software' ) {
		// remove unwanted classes if found
		$classes = str_replace( 'current_page_item', '', $classes );
		$classes = str_replace( 'menu-item', 'menu-item current-menu-item', $classes );
	}
	else if ( get_post_type() == 'post' && $item->title == 'Blog' ) {
		// remove unwanted classes if found
		$classes = str_replace( 'current_page_item', '', $classes );
		$classes = str_replace( 'menu-item', 'menu-item current-menu-item', $classes );
	}
	return $classes;
}
?>
