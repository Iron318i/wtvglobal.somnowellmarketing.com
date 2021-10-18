<?php
/**
 * Single post partial template
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header mb-2">
	<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	<div class="entry-meta">
	    <?php wtvglobal_posted_on(); ?>
	</div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    <div class="entry-content mt-2">
	<?php
	echo wpautop($post->post_content);
	?>
	<?php
	wp_link_pages(
		array(
		    'before' => '<div class="page-links">' . __('Pages:', 'wtvglobal'),
		    'after' => '</div>',
		)
	);
	?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
