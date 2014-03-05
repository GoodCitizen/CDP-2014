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

            <?php global $post; $current_post_type = get_post_type( $post );

  // The query arguments
  $args = array(
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'ID',
    'post_type' => $current_post_type,
    'post__not_in' => array( $post->ID )
  );

  // Create the related query
  $rel_query = new WP_Query( $args );

  // Check if there is any related posts
  if( $rel_query->have_posts() ) :
  ?>

<?php while ( $rel_query->have_posts() ) : $rel_query->the_post(); ?>

    <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('', array('class' => 'img-responsive portfolio-image', 'alt'	=> trim(strip_tags( $attachment->post_excerpt )), 'title'	=> trim(strip_tags( $attachment->post_title )), )); ?>
    <?php else: ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endif; ?>
      <h2><?php the_title(); ?></h2>
    </a>

<?php endwhile; ?>

<?php endif; ?>

          </div> <!-- /.content-area -->
        </main> <!-- /.main.<?php echo roots_main_class(); ?> -->
      </div> <!-- /.row -->
    </div> <!-- /.content-detail.container -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
