<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row justify-content-center">
    <?php
    $arr = $atts['awards'];
    foreach ($arr as $key => $value) {
	?>
        <div class="col-sm-6 col-lg-3">
    	<div class="award"><?php echo wp_get_attachment_image($value["attachment_id"], array(150, 150), false, array("class" => "")); ?></div>
        </div>
    <?php } ?>
</div>