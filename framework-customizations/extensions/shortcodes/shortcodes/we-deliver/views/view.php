<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row cards-row we-deliver">
    <?php
    $arr = $atts['cards'];
    $numItems = count($arr);
    $i = 0;
    foreach ($arr as $key => $value) {
	?>
        <div class="col">
    	<div class="card <?php if (++$i === $numItems) echo " last"; ?>">
    	    <div class="card-img-top">
		    <?php echo wp_get_attachment_image($value['image']["attachment_id"], 'thumbnail', false, array("class" => "normal")); ?>
		    <?php echo wp_get_attachment_image($value['image_invert']["attachment_id"], 'thumbnail', false, array("class" => "hover")); ?>
    	    </div>
    	    <div class="card-body">
    		<h5 class="card-title"><?php echo $value['heading']; ?></h5>
    		<div class="card-text"><?php echo $value['descriprion']; ?></div>
    	    </div>
		<?php if ($i === $numItems) { ?>
		    <a href="#contact-form" class="stretched-link"></a>
		<?php } ?>
    	</div>
        </div>
    <?php } ?>
</div>