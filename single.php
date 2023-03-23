<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="title">
		<?php the_title(); ?>
	</h1>

	<div class="meta">
		<span class="date">
			<?php echo get_the_date(); ?>
		</span>
		<span class="tags">
			<?php the_tags('', ''); ?>
		</span>
	</div>

	<?php if ( ! post_password_required() && ! is_attachment() ) : the_post_thumbnail(); endif; ?>

	<div class="content">
		<?php the_content(); ?>
	</div>

	<?php
		$args = array(
			'before'           => '<div class="page-links">' . __( 'Pages:', 'silver-ratio' ),
			'after'            => '</div>',
			'nextpagelink'     => __( '← Next page', 'silver-ratio' ),
			'previouspagelink' => __( 'Previous page →', 'silver-ratio' )
		);
		wp_link_pages( $args );
	?>
</article>


<nav class="pagination">
	<?php previous_post_link( '%link', __( '← Previous post', 'silver-ratio' ) ); ?>
	<?php next_post_link(     '%link',     __( 'Next post →', 'silver-ratio' ) ); ?>
</nav>

<?php comments_template(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
