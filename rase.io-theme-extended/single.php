<?php get_header(); ?>

<body class="single">
  <div class="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'single' ); ?>
    <?php endwhile; // end of the loop. ?>
  </div><!-- #main -->

  <script>
    var postId = <?php echo get_the_ID(); ?>;
  </script>

  <script src="<?php bloginfo('template_url'); ?>/js/socket.io.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/view-counter.js"></script>
</body>
