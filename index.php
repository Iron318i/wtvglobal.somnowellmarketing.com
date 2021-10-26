<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package wtvglobal-theme
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$page_for_posts = get_option('page_for_posts');
?>
<section id="page-header" class="content-section" style="background-image:url(<?php echo get_the_post_thumbnail_url($page_for_posts, 'full'); ?>);">
    <div class="container text-center">
	<div class="fw-heading fw-heading-h1 text-center">
	    <h1 class="fw-special-title text-white fw-normal mb-0">blog.</h1>
	</div>
    </div>
</section>
<div class="bottom-shadow">
    <div class="container w-1440 py-3" id="content" tabindex="-1">
	<ul class="blog-cats nav">
	    <li><a href="#all" class="active">All</a></li>
	    <?php
	    $terms = get_terms([
		'taxonomy' => 'category'
	    ]);
	    if ($terms && !is_wp_error($terms)) {
		foreach ($terms as $term) {
		    echo '<li><a href="#tax-' . $term->term_id . '">' . $term->name . '</a></li>';
		}
	    }
	    ?>
	</ul>
	<?php
	if (have_posts()) {
	    // Start the Loop.
	    ?>
            <div class="row cards-row">
		<?php
		while (have_posts()) {
		    the_post();

		    /*
		     * Include the Post-Format-specific template for the content.
		     * If you want to override this in a child theme, then include a file
		     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		     */
		    get_template_part('loop-templates/content');
		}
		?>
            </div><!-- .row -->
	    <?php
	} else {
	    get_template_part('loop-templates/content', 'none');
	}
	?>
	<!-- The pagination component -->
	<?php wtvglobal_pagination(); ?>
    </div>
</div>
<?php
get_template_part('template-parts/start-conversation');
get_footer();
