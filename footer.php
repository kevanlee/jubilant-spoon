<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package punt
 */

?>

	</div><!-- #content -->

	<footer id="colophon">
		<div class="site-footer">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'punt' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'punt' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'punt' ), 'punt', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
        <nav class="footer-nav">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-2',
            'menu_id'        => 'footer-menu',
          ) );
          ?>
        </nav><!-- #site-navigation -->
		</div><!-- .site-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
