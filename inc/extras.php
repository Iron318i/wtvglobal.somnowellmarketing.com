<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_filter('body_class', 'wtvglobal_body_classes');

if (!function_exists('wtvglobal_body_classes')) {

    /**
     * Adds custom classes to the array of body classes.
     *
     * @param array $classes Classes for the body element.
     *
     * @return array
     */
    function wtvglobal_body_classes($classes) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
	    $classes[] = 'group-blog';
	}
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
	    $classes[] = 'hfeed';
	}

	return $classes;
    }

}

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.
add_filter('body_class', 'wtvglobal_adjust_body_class');

if (!function_exists('wtvglobal_adjust_body_class')) {

    /**
     * Setup body classes.
     *
     * @param string $classes CSS classes.
     *
     * @return mixed
     */
    function wtvglobal_adjust_body_class($classes) {

	foreach ($classes as $key => $value) {
	    if ('tag' === $value) {
		unset($classes[$key]);
	    }
	}

	return $classes;
    }

}

if (!function_exists('wtvglobal_post_nav')) {

    /**
     * Display navigation to next/previous post when applicable.
     */
    function wtvglobal_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
	$next = get_adjacent_post(false, '', false);

	if (!$next && !$previous) {
	    return;
	}
	?>
	<nav class="container navigation post-navigation">
	    <h2 class="sr-only"><?php esc_html_e('Post navigation', 'wtvglobal'); ?></h2>
	    <div class="row nav-links justify-content-between">
		<?php
		if (get_previous_post_link()) {
		    previous_post_link('<span class="nav-previous">%link</span>', _x('<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'wtvglobal'));
		}
		if (get_next_post_link()) {
		    next_post_link('<span class="nav-next">%link</span>', _x('%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'wtvglobal'));
		}
		?>
	    </div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
    }

}

if (!function_exists('wtvglobal_pingback')) {

    /**
     * Add a pingback url auto-discovery header for single posts of any post type.
     */
    function wtvglobal_pingback() {
	if (is_singular() && pings_open()) {
	    echo '<link rel="pingback" href="' . esc_url(get_bloginfo('pingback_url')) . '">' . "\n";
	}
    }

}
add_action('wp_head', 'wtvglobal_pingback');

if (!function_exists('wtvglobal_mobile_web_app_meta')) {

    /**
     * Add mobile-web-app meta.
     */
    function wtvglobal_mobile_web_app_meta() {
	echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr(get_bloginfo('name')) . ' - ' . esc_attr(get_bloginfo('description')) . '">' . "\n";
    }

}
add_action('wp_head', 'wtvglobal_mobile_web_app_meta');

if (!function_exists('wtvglobal_default_body_attributes')) {

    /**
     * Adds schema markup to the body element.
     *
     * @param array $atts An associative array of attributes.
     * @return array
     */
    function wtvglobal_default_body_attributes($atts) {
	$atts['itemscope'] = '';
	$atts['itemtype'] = 'http://schema.org/WebSite';
	return $atts;
    }

}
add_filter('wtvglobal_body_attributes', 'wtvglobal_default_body_attributes');

// Escapes all occurances of 'the_archive_description'.
add_filter('get_the_archive_description', 'wtvglobal_escape_the_archive_description');

if (!function_exists('wtvglobal_escape_the_archive_description')) {

    /**
     * Escapes the description for an author or post type archive.
     *
     * @param string $description Archive description.
     * @return string Maybe escaped $description.
     */
    function wtvglobal_escape_the_archive_description($description) {
	if (is_author() || is_post_type_archive()) {
	    return wp_kses_post($description);
	} else {
	    /*
	     * All other descriptions are retrieved via term_description() which returns
	     * a sanitized description.
	     */
	    return $description;
	}
    }

} // End of if function_exists( 'wtvglobal_escape_the_archive_description' ).
// Escapes all occurances of 'the_title()' and 'get_the_title()'.
add_filter('the_title', 'wtvglobal_kses_title');

// Escapes all occurances of 'the_archive_title' and 'get_the_archive_title()'.
add_filter('get_the_archive_title', 'wtvglobal_kses_title');

if (!function_exists('wtvglobal_kses_title')) {

    /**
     * Sanitizes data for allowed HTML tags for post title.
     *
     * @param string $data Post title to filter.
     * @return string Filtered post title with allowed HTML tags and attributes intact.
     */
    function wtvglobal_kses_title($data) {
	// Tags not supported in HTML5 are not allowed.
	$allowed_tags = array(
	    'abbr' => array(),
	    'aria-describedby' => true,
	    'aria-details' => true,
	    'aria-label' => true,
	    'aria-labelledby' => true,
	    'aria-hidden' => true,
	    'b' => array(),
	    'bdo' => array(
		'dir' => true,
	    ),
	    'blockquote' => array(
		'cite' => true,
		'lang' => true,
		'xml:lang' => true,
	    ),
	    'cite' => array(
		'dir' => true,
		'lang' => true,
	    ),
	    'dfn' => array(),
	    'em' => array(),
	    'i' => array(
		'aria-describedby' => true,
		'aria-details' => true,
		'aria-label' => true,
		'aria-labelledby' => true,
		'aria-hidden' => true,
		'class' => true,
	    ),
	    'code' => array(),
	    'del' => array(
		'datetime' => true,
	    ),
	    'ins' => array(
		'datetime' => true,
		'cite' => true,
	    ),
	    'kbd' => array(),
	    'mark' => array(),
	    'pre' => array(
		'width' => true,
	    ),
	    'q' => array(
		'cite' => true,
	    ),
	    's' => array(),
	    'samp' => array(),
	    'span' => array(
		'dir' => true,
		'align' => true,
		'lang' => true,
		'xml:lang' => true,
	    ),
	    'small' => array(),
	    'strong' => array(),
	    'sub' => array(),
	    'sup' => array(),
	    'u' => array(),
	    'var' => array(),
	);
	$allowed_tags = apply_filters('wtvglobal_kses_title', $allowed_tags);

	return wp_kses($data, $allowed_tags);
    }

} // End of if function_exists( 'wtvglobal_kses_title' ).

if (!function_exists('load_custom_wp_admin_style')) {

    function load_custom_wp_admin_style() {
	wp_register_style('custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.1');
	wp_enqueue_style('custom_wp_admin_css');
    }

} // End of if function_exists( 'load_custom_wp_admin_style' ).

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

function svg_icon_shortcode($atts) {

    extract(shortcode_atts(
		    array(
	'id' => 0,
	'class' => '',
		    ), $atts)
    );
    $html = '<svg class="icon"><use xlink:href="#' . $id . '"></use></svg>';

    return $html;
}

add_shortcode('svg', 'svg_icon_shortcode');

function the_svg($id) {
    $html = '<svg class="icon"><use xlink:href="#' . $id . '"></use></svg>';

    echo $html;
}

function get_the_svg($id) {
    $html = '<svg class="icon"><use xlink:href="#' . $id . '"></use></svg>';

    return $html;
}

function the_img_url($id) {
    $uri = get_template_directory_uri();
    $url = $uri . '/img/' . $id;

    echo $url;
}

// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action('wp_enqueue_scripts', 'remove_block_css', 100);

function remove_block_css() {
    wp_dequeue_style('wp-block-library'); // WordPress core
    wp_dequeue_style('wp-block-library-theme'); // WordPress core
    wp_dequeue_style('wc-block-style'); // WooCommerce
    wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}

/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove from TinyMCE
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
	return array_diff($plugins, array('wpemoji'));
    } else {
	return array();
    }
}

add_filter('wpseo_breadcrumb_separator', function( $separator ) {
    return '<span class="breadcrumb-separator">' . $separator . '</span>';
});

function shortcode_permalinks($atts) {

    extract(shortcode_atts(
		    array(
	'id' => 0,
	'anchor' => 0,
		    ), $atts)
    );

    if ($id):
	$url = (!empty($params) ? get_permalink($id) . '?' . $params : get_permalink($id) );
    endif;
    if ($anchor):
	$url .= '#' . $anchor;
    endif;

    return $url;
}

add_shortcode('permalink', 'shortcode_permalinks');

function state_shortcode() {
    if (fw_get_db_settings_option('current_state') !== "") {
	$html = '<span class="state">' . fw_get_db_settings_option('current_state') . '</span>';
	return $html;
    }
}

add_shortcode('state', 'state_shortcode');


add_action("wp_ajax_my_ajax_action", "k_ajax_my_ajax_action");
add_action("wp_ajax_nopriv_my_ajax_action", "k_ajax_my_ajax_action");

function k_ajax_my_ajax_action() {
    echo fw_get_db_settings_option('calendly');
    wp_die();
}
