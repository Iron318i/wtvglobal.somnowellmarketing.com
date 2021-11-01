<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="logos owl-carousel owl-theme">
    <?php
    $arr = fw_get_db_settings_option('logos');
    foreach ($arr as $key => $value) {
	?>
        <img class="owl-lazy" data-src="<?php echo wp_get_attachment_image_url($value["attachment_id"], array(240, 240)); ?>" alt="">
    <?php } ?>
</div>