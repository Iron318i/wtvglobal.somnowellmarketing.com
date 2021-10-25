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
<section class="bg-gray">
    <div class="container py-3 w-1440">
	<div class="fw-heading fw-heading-h3 text-center lines mb-3"><h3 class="fw-special-title fw-normal">Other case studies</h3></div>
	<div class="row cards-row">
	    <?php
	    $args = array(
		'posts_per_page' => 4,
		'post_type' => 'work',
		'post__not_in' => array(get_the_ID())
	    );

	    $query = new WP_Query($args);

	    if ($query->have_posts()) {
		while ($query->have_posts()) {
		    $query->the_post();
		    get_template_part('loop-templates/content');
		}
	    }
	    wp_reset_postdata();
	    ?>
	</div>
    </div>
</section>
<?php
get_template_part('template-parts/start-conversation');
get_footer();
