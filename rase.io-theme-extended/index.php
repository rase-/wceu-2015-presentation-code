<?php get_header(); ?>

<body class="list">
  <div class="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post">
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry">
          <?php the_content(); ?>
        </div>
      </div> <!-- closes the first div box -->
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>

  <script src="<?php bloginfo('template_url'); ?>/js/socket.io.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/posts-page.js"></script>
</body>
