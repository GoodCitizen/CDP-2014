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
          </div> <!-- /.content-area -->
        </main> <!-- /.main.<?php echo roots_main_class(); ?> -->
      </div> <!-- /.row -->
    </div> <!-- /.content-detail.container -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
