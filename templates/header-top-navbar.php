<header class="banner" role="banner">
  <nav class="top-bar hide-for-small">
    <ul class="title-area">
      <li class="name">
        <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
      </li>
    </ul>
    <section class="top-bar-section">
       <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => ''));
          endif;
        ?>
    </section>
  </nav>
</header>

