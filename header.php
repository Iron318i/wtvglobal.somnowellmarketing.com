<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    if (fw_get_db_settings_option('is_gtm')) {
        echo fw_get_db_settings_option('gtm_head');
    }
    ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function timestamp() {
            var response = document.getElementById("g-recaptcha-response");
            if (response == null || response.value.trim() == "") {
                var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
                elems["ts"] = JSON.stringify(new Date().getTime());
                document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
            }
        }

        setInterval(timestamp, 500);
    </script>


    <script>
        (function () {
            window.ldfdr = window.ldfdr || {};
            (function (d, s, ss, fs) {
                fs = d.getElementsByTagName(s)[0];

                function ce(src) {
                    var cs = d.createElement(s);
                    cs.src = src;
                    setTimeout(function () {
                        fs.parentNode.insertBefore(cs, fs)
                    }, 1);
                }

                ce(ss);
            })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_JMvZ8gk96Md82pOd.js');
        })();
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "LocalBusiness",
                    "@id": "https://wtvglobal.com/#organization",
                    "name": "",
                    "address": {
                        "@type": "PostalAddress",
                        "@id": "https://wtvglobal.com/#address",
                        "streetAddress": "18 King William Street",
                        "addressLocality": "London",
                        "postalCode": "EC4N 7BP"
                    },
                    "telephone": "+44 7900 247 763",
                    "url": "https://wtvglobal.com/",
                    "sameAs": [
                        "https://www.facebook.com/wtvglobal/",
                        "https://twitter.com/wtvglobal/",
                        "https://www.linkedin.com/company/wtvglobal",
                        ""
                    ]
                }
            ]
        }
    </script>

</head>
<body <?php body_class(); ?> <?php wtvglobal_body_attributes(); ?>>
<?php if (fw_get_db_settings_option('is_gtm')) {
    echo fw_get_db_settings_option('gtm_body');
} ?>
<?php do_action('wp_body_open'); ?>
<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container w-1440">
            <a href="<?php echo site_url(); ?>" class="logo-link" rel="home"><img
                        src="<?php echo get_template_directory_uri() ?>/img/main-logo.png"
                        srcset="<?php echo get_template_directory_uri() ?>/img/main-logo-x2.png 2x"
                        alt="<?php bloginfo('name'); ?>"></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true"
                    aria-label="Toggle navigation">
                <span class="toggle-icon"><i></i><i></i><i></i><i></i></span>
                <span class="btn-text"><?php _e('Menu', 'wtvglobal'); ?></span>
            </button>
            <div id="navbarNavDropdown" class="collapse navbar-collapse">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => 'false',
                        'menu_class' => 'navbar-nav main',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new wtvglobal_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
            </div>
        </div>
    </nav>
</header>