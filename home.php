<?php
/**
 * The main template file
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <h1>VP of Marketing currently living in Boise, Idaho. I work with the lovely folks at Buffer.</h1>
      <a href="" class="button primary">Say Hello</a>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
