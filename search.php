<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

		<?php do_action('AdamPress_before_content'); ?>

		<h2><?php _e('Search Results for', 'AdamPress'); ?> "<?php echo get_search_query(); ?>"</h2>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif;?>

	<?php do_action('AdamPress_before_pagination'); ?>

	<?php if ( function_exists('AdamPress_pagination') ) { AdamPress_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'AdamPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'AdamPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('AdamPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
