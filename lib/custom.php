<?php
/**
 * Custom functions
   Custom Post Types mostly
 */

 show_admin_bar(false);

function create_cdp_slides_post() {
  register_post_type( 'CDPSlides',
    array(
      'labels' => array(
        'name' => __( 'Front Page Slides' ),
        'singular_name' => __( 'CDPSlides' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    )
  );
}
add_action( 'init', 'create_cdp_slides_post' );


function cptui_register_my_cpt_disasters() {
  register_post_type('disasters',
    array(
      'label' => 'Disasters',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => true,
      'rewrite' =>
        array('slug' => 'disasters', 'with_front' => true),
      'query_var' => true,
      'has_archive' => true,
      'supports' =>
        array('title','editor','revisions','thumbnail','page-attributes'),
      'labels' => array (
        'name' => 'Disasters',
        'singular_name' => 'Disaster',
        'menu_name' => 'Disasters',
        'add_new' => 'Add Disaster',
        'add_new_item' => 'Add New Disaster',
        'edit' => 'Edit',
        'edit_item' => 'Edit Disaster',
        'new_item' => 'New Disaster',
        'view' => 'View Disaster',
        'view_item' => 'View Disaster',
        'search_items' => 'Search Disasters',
        'not_found' => 'No Disasters Found',
        'not_found_in_trash' => 'No Disasters Found in Trash',
        'parent' => 'Parent Disaster',
      )
    )
  );
}
add_action('init', 'cptui_register_my_cpt_disasters');

function cptui_register_my_cpt_news() {
  register_post_type(
    'news', array(
      'label' => 'News',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => true,
      'rewrite' => array('slug' => 'news', 'with_front' => true),
      'query_var' => true,
      'has_archive' => true,
      'supports' => array('title','editor','revisions','thumbnail','author','page-attributes'),
      'labels' => array (
        'name' => 'News',
        'singular_name' => 'News',
        'menu_name' => 'News',
        'add_new' => 'Add News',
        'add_new_item' => 'Add New News',
        'edit' => 'Edit',
        'edit_item' => 'Edit News',
        'new_item' => 'New News',
        'view' => 'View News',
        'view_item' => 'View News',
        'search_items' => 'Search News',
        'not_found' => 'No News Found',
        'not_found_in_trash' => 'No News Found in Trash',
        'parent' => 'Parent News',
      )
    )
  );
}
add_action('init', 'cptui_register_my_cpt_news');

function cptui_register_my_taxes_disasters_news() {
  register_taxonomy(
    'disasters-news',array (
      0 => 'news',
    ),
    array(
      'hierarchical' => true,
	    'label' => 'Disasters',
	    'show_ui' => true,
	    'query_var' => true,
	    'show_admin_column' => false,
	    'labels' => array (
        'search_items' => 'Disaster',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
      )
    )
  );
}
add_action('init', 'cptui_register_my_taxes_disasters_news');

function cptui_register_my_taxes_disaster_categories() {
  register_taxonomy(
    'disaster_categories',array (
      0 => 'disasters',
    ),
    array(
      'hierarchical' => true,
	    'label' => 'Disaster Categories',
	    'show_ui' => true,
	    'query_var' => true,
	    'show_admin_column' => false,
	    'labels' => array (
        'search_items' => 'Disaster Category',
        'popular_items' => '',
        'all_items' => '',
        'parent_item' => '',
        'parent_item_colon' => '',
        'edit_item' => '',
        'update_item' => '',
        'add_new_item' => '',
        'new_item_name' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
      )
    )
  );
}
add_action('init', 'cptui_register_my_taxes_disaster_categories');

function create_cdp_partners_post() {
  register_post_type( 'CDPPartners',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'CDPPartners' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'thumbnail', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    )
  );
}
add_action( 'init', 'create_cdp_partners_post' );

function create_cdp_media_room() {
  register_post_type( 'medialinks',
    array(
      'labels' => array(
        'name' => __( 'Media Room' ),
        'singular_name' => __( 'medialinks' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'custom-fields'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    )
  );
}
add_action( 'init', 'create_cdp_media_room' );
