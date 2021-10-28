<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="wtv-calendar">
    <?php
    $arr = $atts['calendar'];
    foreach ($arr as $key => $value) {
	?>
        <div class="item">
    	<h3><?php echo $value['year'] ?></h3>
    	<div class="text"><?php echo $value['content'] ?></div>
        </div>
    <?php } ?>
</div>