<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php get_template_part('templates/header-top-navbar'); ?>

    <div class="content-detail container">
      <div class="row" role="document">
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside> <!-- /.sidebar.<?php echo roots_sidebar_class(); ?> -->
      <?php endif; ?>
        <main class="main <?php echo roots_main_class(); ?>" role="main">
          <div class="content-area">
            <?php include roots_template_path(); ?>
            <div class="related-posts">
            <h3>Related posts</h3>
            <?php global $post;
              $current_post_type = get_post_type( $post );
              $args = array(
                'posts_per_page' => 5,
                'order' => 'DESC',
                'orderby' => 'ID',
                'post_type' => $current_post_type,
                'post__not_in' => array( $post->ID )
              );
              $rel_query = new WP_Query( $args );
              if( $rel_query->have_posts() ) :
            ?>
             <?php while ( $rel_query->have_posts() ) : $rel_query->the_post(); ?>
               <a href="<?php the_permalink(); ?>">
                 <h2><?php the_title(); ?></h2>
              </a>
          <?php endwhile; ?>
            </div><!-- .group -->
          <?php endif; wp_reset_query(); ?>

          </div> <!-- /.content-area -->
        </main> <!-- /.main.<?php echo roots_main_class(); ?> -->
      </div> <!-- /.row -->
    </div> <!-- /.content-detail.container -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
