<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="row platforms-row">
    <?php
    $arr = $atts['platforms'];
    foreach ($arr as $key => $value) {
	?>
        <div class="col">
    	<div class="card">
    	    <div class="card-img-top">
		    <?php echo wp_get_attachment_image($value['image']["attachment_id"], 'thumbnail', false, array("class" => "")); ?>
    	    </div>
    	    <div class="card-body">
    		<h5 class="card-title"><?php echo $value['heading'] ?></h5>
    		<div class="card-text"><?php echo $value['content'] ?></div>
    		<a href="<?php echo $value['link'] ?>" class="stretched-link"></a>
    	    </div>
    	</div>
        </div>
    <?php } ?>
</div>