<footer>
  <div class="container">
    <div class="row">
      <div class="large-6 columns logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-trans-light-horizontal.png">
        <div class="large-3 columns">
          <?php dynamic_sidebar('footer-left'); ?>
        </div>
        <div class="large-3 columns">
          <?php dynamic_sidebar('footer-right'); ?>
        </div>
      </div>
    <div class="large-6 columns">
      <div class="newsletter-signup">
        <h3 class="footer-header">Stay Informed</h3>
        <h5>Subscribe to CDP Issues and Insights</h5>
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
          <input type=hidden name="oid" value="00Di0000000bICY">
          <input type=hidden name="retURL" value="<?php echo home_url(); ?>/thank-you/">
          <input class="footer-input" id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name">
          <input class="footer-input"  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Last Name">
          <input class="footer-input" id="email" maxlength="80" name="email" size="20" type="text" placeholder="Email">
          <input class="button footer-btn" type="submit" name="submit">
        </form>
      </div>
      <hr>
      <div class="twitter-feed">
        <div class="fa fa-twitter fa-2x"></div>
        <h3 class="footer-header inline">Latest Tweets</h3>
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
