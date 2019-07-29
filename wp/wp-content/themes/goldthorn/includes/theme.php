<?php
// Hooks and Filters
add_action('wp_enqueue_scripts', 'gt_enqueue_files');
add_action( 'after_setup_theme', 'gt_post_thumbnails' );

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

function gt_get_image($field, $size='thumbnail', $alt='') {
  $image = get_field($field);
  if(!$image) return '';

  if(is_array($image)) {
    $imgAlt = $alt !== '' ? $alt : $image['alt'];
    return '<img src="'.$image['sizes'][$size].'" alt="'.$imgAlt.'">';
  }

  if(is_int($image)) {
    $src = wp_get_attachment_image_src($image, $size);
    return '<img src="'.$src[0].'" alt="'.$alt.'">';
  }

  return '<img src="'.$image.'" alt="'.$alt.'">';
}

function gt_get_the_title() {
  $object = get_queried_object();

  if(isset($object->taxonomy)){
    return $object->name;
  } else {
    return the_title();
  }
}

function gt_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
}