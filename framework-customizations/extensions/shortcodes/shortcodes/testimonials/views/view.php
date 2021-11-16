<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="testimonials owl-carousel owl-theme">
    <?php
    $arr = fw_get_db_settings_option('testimonials');
    foreach ($arr as $key => $value) {
	?>
        <div class="testimonial">
    	<div class="quote"><?php echo $value['quote_text'] ?></div>
	    <?php if (!empty($value['logo'])) { ?>
		<div class="logo">
		    <?php echo wp_get_attachment_image($value['logo']["attachment_id"], array(110, 110), false, array("class" => 'img-fluid')); ?>
		</div>
	    <?php } ?>
        </div>
    <?php } ?>
</div>