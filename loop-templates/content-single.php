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
    <div class="entry-content">
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
