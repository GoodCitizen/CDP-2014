<?php
/**
 * Custom functions
 */

function create_cdp_slides_post() {
  register_post_type( 'CDPSlides',
    array(
      'labels' => array(
        'name' => __( 'Front Page Slides' ),
        'singular_name' => __( 'CDPSlides' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    )
  );
}
add_action( 'init', 'create_cdp_slides_post' );

function create_cdp_partners_post() {
  register_post_type( 'CDPPartners',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'CDPPartners' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    )
  );
}
add_action( 'init', 'create_cdp_partners_post' );