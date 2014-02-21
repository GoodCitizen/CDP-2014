<!--
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
-->
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
        <div class="large-4 columns">
          <div class="social-nav">
            <ul>
              <li>
                <a href="http://youtube.com" target="_blank">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
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
        <div class="large-8 columns">
          <div class="secondary-nav">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
          <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                <div class="search">
                  <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
                </div>
              </form>
            </div>
          </div>
          <div class='large-12 columns'>
            <div class='main-nav'>
              <ul>
                <li data-name='When' href=''>
                  <a href='/when-to-give'>
                    <strong>Disasters</strong>
                  </a>
                  <ul class='mega-menu'>
                    <li class='inner-wrap'>
                      <div class='triple-drop'>
                        <ul>
                          <li>
                            <a href="/disasters">Disasters</a>
                            <ul>
                              <li>
                                <a href="/disasters/ndia-cyclone-phalin">India: Cyclone Phalin</a>
                                <ul>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Background</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#facts-stats">Facts &amp; Stats</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#cdp-insights">CDP Insights</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Donors</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">NGO Reponse</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Take Action</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Learn More</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#space">Space</a></li>
                                </ul>
                              </li>
                              <li><a href="/disasters/olorodo-floods-2013">Colorado Floods 2013</a></li>
                              <li><a href="/disasters/estern-wildfires-2013">Western Wildfires 2013</a></li>
                              <li><a href="/disasters/ali">Mali</a></li>
                              <li><a href="/disasters/urricane-sandy">Hurricane Sandy</a></li>
                              <li><a href="/disasters/ahel-food-crisis">Sahel Food Crisis</a></li>
                              <li><a href="/disasters/yria-crisis">Syria Crisis</a></li>
                            </ul>
                            <li><a href="/issues">Issues</a></li>
                            <li><a href="/responses">Response</a></li>
                            <li><a href="/supporters">Supporters</a></li>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li data-name='Where' href=''>
                  <a href='/services'>
                    <strong>Services</strong>
                  </a>
                  <ul class='mega-menu'>
                    <li class='inner-wrap'>
                      <div class='triple-drop'>
                        <ul>
                          <li>
                            <a href="/disasters">Disasters</a>
                            <ul>
                              <li>
                                <a href="/disasters/ndia-cyclone-phalin">India: Cyclone Phalin</a>
                                <ul>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Background</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#facts-stats">Facts &amp; Stats</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#cdp-insights">CDP Insights</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Donors</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">NGO Reponse</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Take Action</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#background">Learn More</a></li>
                                  <li><a href="/disasters/ndia-cyclone-phalin#space">Space</a></li>
                                </ul>
                              </li>
                              <li><a href="/disasters/olorodo-floods-2013">Colorado Floods 2013</a></li>
                              <li><a href="/disasters/estern-wildfires-2013">Western Wildfires 2013</a></li>
                              <li><a href="/disasters/ali">Mali</a></li>
                              <li><a href="/disasters/urricane-sandy">Hurricane Sandy</a></li>
                              <li><a href="/disasters/ahel-food-crisis">Sahel Food Crisis</a></li>
                              <li><a href="/disasters/yria-crisis">Syria Crisis</a></li>
                            </ul>
                            <li><a href="/issues">Issues</a></li>
                            <li><a href="/responses">Response</a></li>
                            <li><a href="/supporters">Supporters</a></li>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li data-name='How' href=''>
                  <a href='/learning-center'>
                    <strong>Learning Center</strong>
                  </a>
                  <ul class='mega-menu'>
                    <li class='inner-wrap'>
                      <div class='triple-drop'>
                        <ul>
                          <li>
                            <a href="#">Learning Center</a>
                            <ul>
                              <li>
                                <a href="#">Principles for Disaster Philanthropists</a>
                                <a href="#">Events</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="#">Custom Approaches</a>
                          </li>
                          <li>
                            <a href="#">Donor Collaboration</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
