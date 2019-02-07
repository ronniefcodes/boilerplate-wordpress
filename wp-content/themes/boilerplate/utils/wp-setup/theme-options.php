<?php
  // update_image_sizes
  // set default image sizes
  function update_image_sizes() {
    add_image_size('large', 1280, '', true);
    add_image_size('medium', 768, '', true);
    add_image_size('small', 320, '', true);
  };

  // update_theme_support
  // add theme support for individual features in this function
  function update_theme_support() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
  };

  add_action( 'after_setup_theme', 'update_image_sizes' );
  add_action( 'after_setup_theme', 'update_theme_support' );
?>
