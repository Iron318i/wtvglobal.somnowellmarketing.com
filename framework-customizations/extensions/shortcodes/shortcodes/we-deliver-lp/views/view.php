<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row cards-row we-deliver lp">
    <?php
    $arr = $atts['cards'];
    foreach ($arr as $key => $value) {
	?>
        <div class="col">
    	<div class="card">
    	    <div class="card-img-top">
		    <?php echo wp_get_attachment_image($value['image']["attachment_id"], 'thumbnail', false, array("class" => "normal")); ?>
    	    </div>
    	    <div class="card-body">
    		<h5 class="card-title"><?php echo $value['heading']; ?></h5>
    		<div class="card-text"><?php echo $value['descriprion']; ?></div>
    	    </div>
    	</div>
        </div>
    <?php } ?>
</div>