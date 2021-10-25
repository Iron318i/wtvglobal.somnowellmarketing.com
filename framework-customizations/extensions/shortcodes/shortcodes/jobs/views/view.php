<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row cards-row">
    <?php
    $args = array(
	'posts_per_page' => -1,
	'post_type' => 'job',
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