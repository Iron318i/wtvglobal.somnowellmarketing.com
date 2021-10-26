<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row our-partners">
    <?php
    $arr = fw_get_db_settings_option('partners');
    foreach ($arr as $key => $value) {
	?>
        <div class="col">
    	<div class="partner">
		<?php if ($value['image']): ?>
		    <div class="img"><?php echo wp_get_attachment_image($value['image']["attachment_id"], array(260, 260), false, array("class" => "")); ?></div>
		<?php endif; ?>
		<?php if ($value['partner_text'] != ""): ?>
		    <div class="text"><?php echo $value['partner_text']; ?></div>
		<?php endif; ?>
    	</div>
        </div>
	<?php
    }
    ?>
</div>