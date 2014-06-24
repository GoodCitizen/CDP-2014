<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
  <script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script charset="utf-8" type="text/javascript">stLight.options({"publisher":"fd6cf7ad-d014-48f8-9c51-a26208ff09cd"});var st_type="wordpress3.8.1";</script>

  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>assets/img/favicon.png">

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
