<?php
  function enqueue_app_stylesheet() {
    wp_enqueue_style( 'app_stylesheet', get_template_directory_uri() . '/styles/app.css' );
  }

  function enqueue_app_scripts() {
    wp_enqueue_script( 'app_scripts', get_template_directory_uri() . '/scripts/app.js', array(), false, true );
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_app_stylesheet', 100 );
  add_action( 'wp_enqueue_scripts', 'enqueue_app_scripts', 100 );
?>
