<?php
add_action( 'init', 'product_posttype' );

function product_posttype() {
  $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
  );

  $labels = array(
    'name'            => _x( 'Products', 'plural' ),
    'singular_name'   => _x( 'Product', 'singular' ),
    'menu_name'       => _x( 'Products', 'admin menu' ),
    'name_admin_bar'  => _x( 'Products', 'admin bar' ),
    'add_new'         => _x( 'Add New', 'add new' ),
    'add_new_item'    => __( 'Add New Product' ),
    'new_item'        => __( 'New Product' ),
    'edit_item'       => __( 'Edit Products' ),
    'view_item'       => __( 'View Products' ),
    'all_items'       => __( 'All Products' ),
    'search_items'    => __( 'Search Products' ),
    'not_found'       => __( 'No Products found.' ),
  );
  
  $args = array(
    'supports'        => $supports,
    'labels'          => $labels,
    'public'          => true,
    'menu_position'   => 7,
    // 'show_in_rest'    => true,  // This is what displays gutenberg block if true, if not you get the old WYSIWYG editor.
    'menu_icon'       => 'dashicons-products',
    'query_var'       => true,
    'rewrite'         => array('slug' => 'product'),
    'has_archive'     => true,
    'hierarchical'    => false,
  );
  
  register_post_type('product', $args);
}