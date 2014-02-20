<header class="banner row" role="banner">
  <div class="small-12 columns">
   <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
   <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

