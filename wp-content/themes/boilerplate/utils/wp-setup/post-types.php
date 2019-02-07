<?php
  function create_custom_post_type() {
    // create custom post types in this format
    // ie. register_post_type('custom-post',
    //   array(
    //   'labels' => array(
    //     'name' => __('Custom Post', 'custom-post'),
    //     'singular_name' => __('Custom Post', 'custom-post'),
    //     'add_new' => __('Add New', 'custom-post'),
    //     'add_new_item' => __('Add New Custom Post', 'custom-post'),
    //     'edit' => __('Edit', 'custom-post'),
    //     'edit_item' => __('Edit Custom Post', 'custom-post'),
    //     'new_item' => __('New Custom Post', 'custom-post'),
    //     'view' => __('View Custom Post', 'custom-post'),
    //     'view_item' => __('View Custom Post', 'custom-post'),
    //     'search_items' => __('Search Custom Post', 'custom-post'),
    //     'not_found' => __('No Custom Posts found', 'custom-post'),
    //     'not_found_in_trash' => __('No Custom Posts found in Trash', 'custom-post')
    //   ),
    //   'public' => true,
    //   'has_archive' => false,
    //   'menu_icon' => 'dashicons-star-filled',
    //   'supports' => array(
    //     'title',
    //   ),
    //   'can_export' => true, // Allows export in Tools > Export
    // ));
  }

  add_action( 'after_setup_theme', 'create_custom_post_type' );
?>
