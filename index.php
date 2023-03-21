<?php get_header(); ?>

<?php if ( is_tag() ) {
	$tag = get_queried_object();
	single_tag_title(
		'<div class="info">' . __( 'Currently selected tag:', 'silver-ratio' ) . ' <strong>'
	);
	echo '</strong></a></div>';
}?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="title">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php the_title(); ?>
		</a>
	</h1>

	<div class="meta">
		<span class="date">
			<?php echo get_the_date(); ?>
		</span>
		<span class="tags">
			<?php the_tags('', ''); ?>
		</span>
	</div>

	<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

	<div class="content">
		<?php the_content( __( 'Read more…', 'silver-ratio' ) ); ?>
	</div>

</article>

<?php endwhile; ?>

<?php
	$prev_link = get_next_posts_link( __( '← Older posts', 'silver-ratio' ) );
	$next_link = get_previous_posts_link( __( 'Newer posts →', 'silver-ratio' ) );
	if ($prev_link || $next_link) :
?>
	<hr class="pagination-divider" />
	<nav class="pagination">
		<div class="previous">
			<?php echo $prev_link; ?>
		</div>
		<div class="next">
			<?php echo $next_link; ?>
		</div>
	</nav>
<?php endif; ?>

<?php else : ?>
<p>
	<?php _e( 'Sorry, no posts found.', 'silver-ratio' ); ?>
</p>
<?php endif; ?>

<?php get_footer(); ?>
