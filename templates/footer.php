<footer>
  <div class="container">
    <div class="row">
      <div class="large-6 columns logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-trans-light-horizontal.png">
      </div>
      <div class="large-6 columns search">
        <form role="search" method="get" action="<?php echo home_url('/'); ?>">
          <div class="search">
            <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="large-3 columns">
        <?php dynamic_sidebar('footer-left'); ?>
      </div>
      <div class="large-3 columns">
        <?php dynamic_sidebar('footer-right'); ?>
      </div>
    <div class="large-6 columns">
      <div class="twitter-feed">
        <div class="fa fa-twitter fa-2x"></div>
        <h3 class="inline">Latest Tweets</h3>
        <div class="follow"> follow us
          <a href="https://twitter.com/funds4disaster">@funds4disaster</a>
        </div>
        <div id="ourTweets" class="the-tweets"></div>
      </div>
    </div>
  </div>
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="large-12 columns">
          <p>Copyright &copy; <?php echo date('Y'); ?> Center for Disaster Philanthropy. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
