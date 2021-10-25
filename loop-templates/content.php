<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="col">
    <div class="card">
	<div class="card-img-top">
	    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => '')); ?>
	</div>
	<div class="card-body">
	    <h5 class="card-title"><?php the_title(); ?></h5>
	    <div class="card-text"><?php the_excerpt(); ?></div>
	    <a href="<?php the_permalink() ?>" class="stretched-link"></a>
	</div>
    </div>
</div>