<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="logos owl-carousel owl-theme">
    <?php
    $arr = fw_get_db_settings_option('logos');
    foreach ($arr as $key => $value) {
	echo wp_get_attachment_image($value["attachment_id"], array(240, 240), false, array("class" => ""));
    }
    ?>
</div>