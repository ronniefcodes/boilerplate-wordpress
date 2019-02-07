<?php
  function populate_default_pages() {
    $pages = array(
      // array of page objects to prepopulate
      // ie. array(
      //   'title' => 'About',
      //   'content' => '',
      // ),
    );

    foreach( $pages as $page ) {
      if ( !get_page_by_title( $page['title'] ) ) {
        wp_insert_post(
          array(
            'post_type' => 'page',
            'post_title' => $page['title'],
            'post_content' => $page['content'],
            'post_name' => strtolower($page['title']),
            'post_status' => 'publish',
          )
        );
      }
    }
  };

  function set_homepage_option() {
    $homepage = null; // ie. get_page_by_title( 'Home' );

    if ( $homepage ) {
      update_option( 'page_on_front', $homepage->ID );
      update_option( 'show_on_front', 'page' );
    }
  };

  add_action( 'after_setup_theme', 'populate_default_pages', 100 );
  add_action( 'after_setup_theme', 'set_homepage_option', 200 );
?>
