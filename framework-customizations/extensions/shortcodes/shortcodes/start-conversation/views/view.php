<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="row start-conversation">
    <div class="col-md-6">
	<?php echo fw_get_db_settings_option('salesforce'); ?>
    </div>
    <div id="calendly" class="col-md-6"></div>
</div>