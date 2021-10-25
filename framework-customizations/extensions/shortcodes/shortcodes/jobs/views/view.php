<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="recent-jobs">
    <div class="row row-cols-md-3">
	<?php
	$args = array(
	    'posts_per_page' => -1,
	    'post_type' => 'job',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
	    while ($query->have_posts()) {
		$query->the_post();
		?>
		<div class="col">
		    <div class="card">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'card-img-top')); ?>
			<div class="card-body">
			    <h5 class="card-title"><?php the_title(); ?></h5>
			    <div class="card-text"><?php the_excerpt(); ?></div>
			    <a href="#" class="stretched-link"></a>
			</div>
		    </div>
		</div>
		<?php
	    }
	}
	wp_reset_postdata();
	?>
    </div>
</div>