<?php get_header(); ?>

<article>
	<h1 class="page-title">
		<?php _e( 'Page not found!', 'silver-ratio' ); ?>
	</h1>
	<p>
		<?php _e( 'Hi! Unfortunately this page was not found.', 'silver-ratio' ); ?>
	</p>
	<p>
		<?php
		printf(
		__( 'Please try going back to the <a href="%s">Blog</a> and start another journey through the huge landscape that is this website.', 'silver-ratio' ),
			esc_url( home_url() ) );
	  ?>
	</p>
	<p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/404.jpg" class="aligncenter" alt="404" title="<?php __( 'What happened?!', 'silver-ratio' ); ?>">
	</p>

</article>

<?php get_footer(); ?>
