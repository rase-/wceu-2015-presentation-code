<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <small>Views: <span id="view-count"><?php esc_html_e( get_post_meta( get_the_ID(), 'real_time_views' )[0] )?></span></small>
  </div><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'raseio' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</div><!-- #post-## -->
