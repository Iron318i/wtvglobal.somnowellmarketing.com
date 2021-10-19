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
<div class="footer-logo">
    <a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img src="<?php echo wp_get_attachment_image_url(fw_get_db_settings_option('footer_logo')["attachment_id"], 'thumbnail') ?>" alt="<?php bloginfo('name'); ?>"></a>
</div>
<footer class="site-footer">
    <div class="container w-1440">
	<div class="row">
	    <div class="col-lg-auto">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'privacy',
			    'container' => false,
			    'container_class' => false,
			    'menu_class' => 'nav privacy',
			    'menu_id' => 'nav-links',
			)
		);
		?>
	    </div>
	    <div class="col-lg-auto">
		<?php
		wp_nav_menu(
			array(
			    'theme_location' => 'footer',
			    'container' => false,
			    'container_class' => false,
			    'menu_class' => 'nav',
			    'menu_id' => 'nav-links',
			)
		);
		?>
	    </div>
	</div>
    </div>
</footer>
<?php get_template_part('template-parts/svg-sprite') ?>
<?php wp_footer(); ?>
</body>
</html>