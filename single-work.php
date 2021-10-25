<?php
/**
 * The template for displaying all single posts
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div id="content" class="single-content">
    <?php
    while (have_posts()) {
	the_post();

	if (fw_ext_page_builder_is_builder_post(get_the_ID())) {
	    the_content();
	} else {
	    get_template_part('loop-templates/content', 'page');
	}
    }
    ?>
</div>
<?php
get_template_part('template-parts/start-conversation');
get_footer();
