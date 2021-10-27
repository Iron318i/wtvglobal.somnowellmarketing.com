<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row metrics">
    <?php
    $arr = fw_get_db_settings_option('metrics');
    foreach ($arr as $key => $value) {
	?>
        <div class="col-6 col-sm-4 col-lg-3">
    	<div class="metric">
		<?php if ($value['image']): ?>
		    <div class="img"><?php echo wp_get_attachment_image($value['image']["attachment_id"], array(260, 260), false, array("class" => "")); ?></div>
		<?php endif; ?>
		<?php if ($value['heading'] != ""): ?>
		    <div class="text"><?php echo $value['heading']; ?></div>
		<?php endif; ?>
    	</div>
        </div>
	<?php
    }
    ?>
</div>