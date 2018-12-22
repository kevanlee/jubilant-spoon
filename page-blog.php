<?php
/**
 * Template Name: Horizontal Blog Yeah
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package punt
 */

get_header();
?>

<div id="content" class="blog">
	<h1>Blog</h1>
</div>



	<div class="cd-projects-wrapper projects-visible">
			<?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'template-parts/content-horizontal-blog', get_post_format() );

        // End the loop.
        endwhile;
        ?>

		<ul class="cd-slider-navigation cd-img-replace">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-slider-navigation -->
	</div> <!-- .cd-projects-wrapper -->

	<div id="content" class="bottom">
		<a href="" class="button primary">Say Hello</a>
	</div>


<?php
get_sidebar();
get_footer();
