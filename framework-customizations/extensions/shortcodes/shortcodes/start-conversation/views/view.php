<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="row">
    <div class="col-md-6">
	<?php echo fw_get_db_settings_option('salesforce'); ?>
    </div>
    <div class="col-md-6">
	<?php echo fw_get_db_settings_option('calendly'); ?>
    </div>
</div>