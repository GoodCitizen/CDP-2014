<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php get_template_part('templates/header-top-navbar'); ?>
  


  <section class='hero'>
       <ul class='cycle-slideshow' data-cycle-next='.arrow.right' data-cycle-pause-on-hover='false' data-cycle-prev='.arrow.left' data-cycle-slides='&gt; li' data-cycle-speed='600' data-cycle-timeout='5000'>
      <?php query_posts('post_type=CDPSlides&showposts=4'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <li>
           <a href='<?php the_permalink(); ?>'>
             <img src='<?php echo get_template_directory_uri(); ?>/assets/img/hero/haiyan.jpg'>
           </a>
           <div class='caption'>
             <h1><?php the_title(); ?></h1>
             <h4 class='sans'>An Inside Look at the CDP Typhoon Haiyan Fund</h4>
             <ul class='hero-buttons'>
               <li>
                 <a href='/issue/typhoons/'>
                   <div class='title'>Issue</div>
                   <div class='text'>Typhoons</div>
                 </a>
               </li>
               <li>
                 <a href='/disasters/haiyan'>
                   <div class='title'>Disaster</div>
                   <div class='text'>Haiyan</div>
                 </a>
               </li>
               <li>
                 <a href='/blog/an-inside-look-at-the-cdp-typhoon-haiyan-fund/'>
                   <div class='title'>Blog</div>
                   <div class='text'>Regine's Blog</div>
                 </a>
               </li>
             </ul>
           </div>
         </li>
       <?php endwhile; endif; ?>
       <?php wp_reset_query(); ?>
       </ul>
     </section>

  <div class="body-wrap">
    <div class="container">
      <div class="row" role="document">
        <main class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
        <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- row -->
    </div><!-- /.continer -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
