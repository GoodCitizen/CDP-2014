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
     
  <div class="container home">
    <div class="row">
     
      <div class="disaster-dashboard component">
        <h1>Disaster Dashboard</h1>
        <h2>Get the facts on currently unfolding disasters</h2>
        <div class="horizontal-image-slider">
          <div class="wrap">
            <div class="container">
              <ul>
              <?php query_posts('showposts=3&category_name=disaster-coverage'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                  <?php if (has_post_thumbnail()): ?>
                    
                  <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
                  <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $src[0]; ?>)">
                    <div class="caption"><?php the_title(); ?></div>
                  </a>
                  <?php else: ?>
                    
                  <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/disasters/fire.png)">
                    <div class="caption"><?php the_title(); ?></div>
                  </a>
                  
    							<?php endif; ?>
       					  <?php endwhile; ?>
       					  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  
                </li>
                <li>
                  <a href="/disasters">
                    <div class="caption">Disaster Archive</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="cdp-spotlight component">
        <h1>CDP<strong>Spotlight</strong></h1>
        <h2>highlighting donors, NGOs and leaders the the field</h2>
        <div class="horizontal-image-slider logos">
          <ul>
            <?php query_posts('post_type=CDPPartners&showposts=4'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li>
            <?php if (has_post_thumbnail()): ?>
              <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
              <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $src[0]; ?>)">
              </a>
            <?php else: ?>
              <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/disasters/placeholder.png)">
                <div class="caption"><?php the_title(); ?></div>
              </a>
						<?php endif; ?>
            </li>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
          </ul>
        </div>
      </div>
      
      <div class="news-room component">
        <h1><strong>News and Insights from CDP</strong></h1>
        <h2>expert insights</h2>
        <div class="large-2 columns side-nav">
          <?php dynamic_sidebar('sidebar-home-newsroom'); ?>
        </div>
        <div class="large-10 columns">
          <div class="news-listing">
            <?php query_posts('showposts=3'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="large-8 columns">
              <h3 data-target="<?php the_permalink(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="meta">
                <?php the_author_posts_link(); ?>
                |
                <time>October 13, 2013</time>
              </div>
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="large-4 columns">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('', array('class' => '')); ?>
              <?php endif;?>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
      </div>
      
      <div class="media-room component">
        <div class="large-12 columns">
          <h1>The <strong>Media Room</strong></h1>
        </div>
        <div class="large-8 offset-2 columns">
          <div class="news-listing">
            <ul>
              <li>
                <h3><a href="http://www.huffingtonpost.com/lori-j-bertman/caution-you-dont-want-to_b_4318305.html">Huffington Post: Caution! You Don’t Want to End Up in Disaster Giving Hall of Shame</a></h3>
                <time class="meta">Nov. 21, 2013</time>
              </li>    
            </ul>
          </div>
        </div>
      </div>
     
    </div> <!-- row -->
  </div><!-- container home -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
