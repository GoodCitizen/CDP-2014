<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar show-for-small-only">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon"><span></span></a>
      </section>
      <section class="right tab-bar-section">
        <h1 class="title">CDP</h1>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <?php
        if (has_nav_menu('mobile_navigation')) :
          wp_nav_menu(array('theme_location' => 'mobile_navigation', 'menu_class' => 'off-canvas-list'));
        endif;
      ?>
    </aside>

<header>
  <div class="container">
    <div class="row">
      <div class="large-5 columns">
        <div class="logo">
          <a href="<?php echo home_url(); ?>/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-trans.png">
          </a>
        </div>
      </div>
      <div class="large-7 columns">
        <div class="large-10 large-offset-2 columns">
          <div class="top-bar-section secondary-nav">
            <?php
               if (has_nav_menu('primary_navigation')) :
                 wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'left'));
               endif;
             ?>
          </div>
          <form role="search" method="get" action="<?php echo home_url('/'); ?>">
            <div class="search">
              <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
            </div>
          </form>
        </div>
      </div>
    </div> <!-- /.row -->
    <div class="row">
      <div class="large-9 columns">
        <div class="main-nav hide-for-small-only">
          <dl class="accordion" data-accordion>
            <dd>
              <a class="main-menu-stack disasters-link" href="#panel1">
                Disasters
              </a>
              <a class="main-menu-stack services-link" href="#panel2">
                Services
              </a>
              <a class="main-menu-stack learning-link" href="#panel3">
                Learning Center
              </a>
            </dd>
            <dd>
              <div id="panel1" class="content disasters-panel">
                <?php
                  if (has_nav_menu('disaster_navigation')) :
                    wp_nav_menu(array('theme_location' => 'disaster_navigation', 'menu_class' => ''));
                  endif;
                ?>
              </div>
            </dd>
            <dd>
              <div id="panel2" class="content services-panel">
                <?php
                  if (has_nav_menu('services_navigation')) :
                    wp_nav_menu(array('theme_location' => 'services_navigation', 'menu_class' => ''));
                  endif;
                ?>
              </div>
            </dd>
            <dd>
              <div id="panel3" class="content learning-panel">
                <?php
                  if (has_nav_menu('learning_navigation')) :
                    wp_nav_menu(array('theme_location' => 'learning_navigation', 'menu_class' => ''));
                  endif;
                ?>
              </div>
            </dd>
          </dl>
        </div>
      </div>
      <div class="large-3 columns">
        <div class="social-nav">
          <ul>
            <li>
              <a href="https://www.facebook.com/funds4disaster" target="_blank">
                <i class='fa fa-facebook'></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/funds4disaster" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</header>
