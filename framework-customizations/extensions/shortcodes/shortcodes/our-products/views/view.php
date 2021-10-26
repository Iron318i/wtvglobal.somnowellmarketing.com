<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row our-products g-0">
    <?php
    $arr = fw_get_db_settings_option('products');
    foreach ($arr as $key => $value) {
	?>
	<?php if ($value['image']): ?>
	    <div class="col">
		<div class="product">
		    <a href="<?php echo $value['link']; ?>"><?php echo wp_get_attachment_image($value['image']["attachment_id"], array(480, 286), false, array("class" => "")); ?></a>
		</div>
	    </div>
	<?php endif; ?>
	<?php
    }
    ?>
</div>