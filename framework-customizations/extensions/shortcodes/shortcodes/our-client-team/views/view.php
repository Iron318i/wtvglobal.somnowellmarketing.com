<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="our-team">
    <?php
    $arr = fw_get_db_settings_option('persons');
    foreach ($arr as $key => $value) {
	?>
        <div class="team-member">
    	<div class="inner">
		<?php if ($value['image']): ?>
		    <div class="img"><?php echo wp_get_attachment_image($value['image']["attachment_id"], array(110, 110), false, array("class" => "card-img")); ?></div>
		<?php endif; ?>
    	    <h4><?php echo $value['heading']; ?></h4>
		<?php if ($value['position'] != ""): ?>
		    <p class="position"><?php echo $value['position']; ?></p>
		<?php endif; ?>
		<?php if ($value['email'] != ""): ?>
		    <p class="email"><a href="mailto:<?php echo antispambot($value['email']) ?>" title="<?php echo $value['email']; ?>"><?php echo antispambot($value['email']) ?></a></p>
		<?php endif; ?>
		<?php if ($value['division'] != ""): ?>
		    <div class="division"><?php echo $value['division']; ?></div>
		<?php endif; ?>
    	</div>
        </div>
	<?php
    }
    ?>
</div>