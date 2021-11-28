<?php

add_action('init', 'hsbaird_create_post_types');

function hsbaird_create_post_types() {

  // Set up Officers
  $officerLabels = array(
    'name' => 'Officers',
    'singular_name' => 'Officer',
    'add_new' => 'Add New Officer',
    'add_new_item' => 'Add New Officer',
    'edit_item' => 'Edit Officer',
    'new_item' => 'New Officer',
    'all_items' => 'All Officers',
    'view_item' => 'View Officer',
    'search_items' => 'Search Officers',
    'not_found' =>  'No Officers Found',
    'not_found_in_trash' => 'No Officers found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Officers'
  );

  register_post_type('officer', array(
    'labels' => $officerLabels,
    'has_archive' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-networking',
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'officer')
    )
  );

  // Set up Newsletters
  $newsletterLabels = array(
    'name' => 'Newsletters',
    'singular_name' => 'Newsletter',
    'add_new' => 'Add New Newsletter',
    'add_new_item' => 'Add New Newsletter',
    'edit_item' => 'Edit Newsletter',
    'new_item' => 'New Newsletter',
    'all_items' => 'All Newsletters',
    'view_item' => 'View Newsletter',
    'search_items' => 'Search Newsletters',
    'not_found' =>  'No Newsletters Found',
    'not_found_in_trash' => 'No Newsletters found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Newsletters'
  );

  register_post_type('newsletter', array(
    'labels' => $newsletterLabels,
    'has_archive' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-calendar',
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'newsletter')
    )
  );

  // Set up Steamboat Dinners
  $steamboatLabels = array(
    'name' => 'Dinners',
    'singular_name' => 'Dinner',
    'add_new' => 'Add New Dinner',
    'add_new_item' => 'Add New Dinner',
    'edit_item' => 'Edit Dinner',
    'new_item' => 'New Dinner',
    'all_items' => 'All Dinners',
    'view_item' => 'View Dinner',
    'search_items' => 'Search Dinners',
    'not_found' =>  'No Dinners Found',
    'not_found_in_trash' => 'No Dinners found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Dinners'
  );

  register_post_type('steamboat', array(
    'labels' => $steamboatLabels,
    'has_archive' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes'),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-groups',
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'steamboat')
    )
  );


}

?>
