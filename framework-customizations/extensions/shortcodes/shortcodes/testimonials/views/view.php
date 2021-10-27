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
    	<div class="author"><?php echo $value['heading'] ?></div>
        </div>
<?php } ?>
</div>