<?php
/**
 * The template for displaying all single posts
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$bgurl = wp_get_attachment_image_url(2862, 'full');
?>
<div class="single-header" style="background-image: url(<?php echo $bgurl; ?>);"></div>
<div class="container py-3 w-1440" id="content" tabindex="-1">
    <div class="row">
	<div class="col-12 single-content">
	    <?php
	    while (have_posts()) {
		the_post();
		get_template_part('loop-templates/content', 'single');
	    }
	    ?>
	</div>
	<div class="col-12 aside">
	    <?php if (is_active_sidebar('single-post')) : ?>
		<?php dynamic_sidebar('single-post'); ?>
	    <?php endif; ?>
	</div>
    </div>
</div>
<section class="bottom-shadow">
    <div class="container pb-3 w-1440">
	<div class="fw-heading fw-heading-h3 text-center lines mb-2"><h3 class="fw-special-title fw-normal">Other job posts</h3></div>
	<div class="row cards-row">
	    <?php
	    $args = array(
		'posts_per_page' => -1,
		'post_type' => 'job',
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
