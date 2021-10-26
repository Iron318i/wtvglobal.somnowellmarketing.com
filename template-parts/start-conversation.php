<?php
/**
 * Svg Sprite
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
?>
<section class="content-section py-2 py-md-3 bottom-shadow">
    <div class="container w-1440">
	<div class="fw-heading fw-heading-h2 text-center lines">
	    <h2 class="fw-special-title text-dark fw-semibold mb-2 mb-md-3">Start a conversation</h2></div><div class="fw-heading fw-heading-h4 text-center">
	    <h4 class="fw-special-title text-dark fw-normal">Send a Message or Schedule a Call</h4></div>
	<div class="row start-conversation">
	    <div class="col-md-6">
		<?php echo fw_get_db_settings_option('salesforce'); ?>
	    </div>
	    <div class="col-md-6">
		<?php echo fw_get_db_settings_option('calendly'); ?>
	    </div>
	</div>
    </div>
</section>