<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="footer-addresses">
    <div class="container w-1440">
	<div class="row g-0">
	    <?php foreach (fw_get_db_settings_option('cities') as $value) { ?>
    	    <div class="col-sm-6 col-lg-3">
    		<div class="address">
			<?php echo wp_get_attachment_image($value['image']["attachment_id"], array(360, 250), false, array("class" => 'img-city')); ?>
    		    <div class="info">
    			<h4 class="h5"><?php echo $value['heading'] ?></h4>
    			<div><a href="tel:<?php echo preg_replace("/[^0-9]/", '', $value['phone']) ?>"><?php echo $value['phone'] ?></a></div>
    			<div><a href="mailto:<?php echo $value['email'] ?>"><?php echo $value['email'] ?></a></div>
    		    </div>
    		</div>
    	    </div>
	    <?php } ?>
	</div>
    </div>
</div>
<div class="footer-logo">
    <a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img src="<?php echo wp_get_attachment_image_url(fw_get_db_settings_option('footer_logo')["attachment_id"], 'thumbnail') ?>" alt="<?php bloginfo('name'); ?>"></a>
</div>
<footer class="site-footer">
    <div class="container w-1440">
	<div class="row">
	    <div class="col-md-auto">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'privacy',
			    'container' => false,
			    'container_class' => false,
			    'menu_class' => 'nav privacy',
			    'menu_id' => 'privacy-links',
			)
		);
		?>
	    </div>
	    <div class="col-md-auto">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'footer',
			    'container' => false,
			    'container_class' => false,
			    'menu_class' => 'nav',
			    'menu_id' => 'footer-links',
			)
		);
		?>
	    </div>
	</div>
    </div>
</footer>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
<script>
    function getParam(p) {
	var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
	return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }
    function getExpiryRecord(value) {
	var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90-day expiry in milliseconds
	var expiryDate = new Date().getTime() + expiryPeriod;
	return {
	    value: value,
	    expiryDate: expiryDate
	};
    }
    function addGclid() {
	var gclidParam = getParam('gclid');
	var gclidFormFields = ['gclid_field', 'website-uk-home', 'website-uk-live', 'website-uk-creative', 'website-uk-platforms', 'website-uk-partners', 'website-uk-work', 'website-uk-story', 'website-uk-blog', 'website-uk-jobs', 'website-uk-contact', 'website-uk-crewstudio', 'website-uk-streamstudio', 'website-uk-easywebcast', 'website-uk-eventstudio']; // all possible gclid form field ids here
	var gclidRecord = null;
	var currGclidFormField;
	var gclsrcParam = getParam('gclsrc');
	var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;
	gclidFormFields.forEach(function (field) {
	    if (document.getElementById(field)) {
		currGclidFormField = document.getElementById(field);
	    }
	});
	if (gclidParam && isGclsrcValid) {
	    gclidRecord = getExpiryRecord(gclidParam);
	    localStorage.setItem('gclid', JSON.stringify(gclidRecord));
	}
	var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
	var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;
	if (currGclidFormField && isGclidValid) {
	    currGclidFormField.value = gclid.value;
	}
    }
    window.addEventListener('load', addGclid);
    jQuery("#00N0X00000DZ8lW").val(getParam('ppcCampaign'));
    jQuery(".00N0X00000DZ8lW").val(getParam('ppcCampaign'));
</script>
</body>
</html>