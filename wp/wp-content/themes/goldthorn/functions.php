<?php
// Set up post types
require_once 'includes/post-types/product.php';

// Hooks and Filters
add_action('wp_enqueue_scripts', 'gt_enqueue_files');

// Set up navigation
register_nav_menus(
  array(
    'mainmenu' => __( 'Main Menu', 'tourwriter' ),
    'footermenu' => __( 'Footer Menu', 'tourwriter' )
  )
);

// Functions
function gt_enqueue_files() {
  wp_enqueue_style( 'gt-styles', get_template_directory_uri() . '/dist/css/theme.css');
  wp_enqueue_script( 'gt-scripts', get_template_directory_uri() . '/dist/js/theme.js', [], false, true);
}

function gt_get_the_title() {
  $object = get_queried_object();

  if(isset($object->taxonomy)){
    return $object->name;
  } else {
    return the_title();
  }
}