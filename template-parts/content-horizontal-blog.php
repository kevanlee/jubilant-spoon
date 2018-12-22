<?php
/**
 * Template part for displaying the horizontal blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package punt
 */

?>
<ul class="cd-slider">
  <li class="slides-in">
    <a href="' . esc_url( get_permalink() ) . '">
      <?php punt_post_thumbnail(); ?>
      <div class="project-info">
        <p>
          <?php
        		punt_posted_on();
        		punt_posted_by();
        	?>
        </p>
        <?php the_title( '<h2 class="entry-title"> rel="bookmark">', '</h2>' ); ?>
      </div>
    </a>
  </li>

  <li class="slides-in">

      <div class="project-info">
        <?php
        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );

        ?>
      </div>

  </li>
</ul>
