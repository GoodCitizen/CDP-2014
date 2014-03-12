<?php
/**
 * Enqueue scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.min.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.11.0.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.7.0.min.js
 * 3. /theme/assets/js/main.min.js (in footer)
 */
function roots_scripts() {
  wp_enqueue_style('roots_fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', false);
  wp_enqueue_style('roots_fonts', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100', false);
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, '86ba8fecabf0ebb0dcc87683b405c323');
  // wp_enqueue_style('roots_peele', get_template_directory_uri() . '/assets/css/peele.min.css', false, '5194de6d408556c78af04ae2306903fe');
  // wp_enqueue_style('roots_cauley', get_template_directory_uri() . '/assets/css/cauley.min.css', false, '5194de6d408556c78af04ae2306903fe');

  // jQuery is loaded using the same method from HTML5 Boilerplate:
  // Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin() && current_theme_supports('jquery-cdn')) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), null, false);
    add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.7.0.min.js', array(), null, false);
  wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '97d057f56f2b8a921f6577ead0abc54b', true);
  wp_register_script('roots_twitter', get_template_directory_uri() . '/assets/js/custom/twitter.js', array(), 'false', true);
  wp_register_script('dropdown', get_template_directory_uri() . '/assets/js/plugins/foundation/dropdown.js', array(), 'false', true);
  wp_register_script('foundation', get_template_directory_uri() . '/assets/js/custom/foundation.min.js', array(), 'false', true);
  wp_register_script('roots_app', get_template_directory_uri() . '/assets/js/custom/app.js', array(), 'false', true);
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery');
  // wp_enqueue_script('roots_scripts');
  // wp_enqueue_script('roots_twitter');
  wp_enqueue_script('foundation');
  wp_enqueue_script('roots_app');
}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/js/vendor/jquery-1.11.0.min.js"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = true;
  }

  return $src;
}
add_action('wp_head', 'roots_jquery_local_fallback');

function roots_google_analytics() { ?>
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>');ga('send','pageview');
</script>

<?php }
if (GOOGLE_ANALYTICS_ID && !current_user_can('manage_options')) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}
