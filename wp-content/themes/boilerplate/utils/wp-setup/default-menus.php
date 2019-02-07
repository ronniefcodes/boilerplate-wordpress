<?php
  function create_menu_item( $page_title, $page_url = null, $menu_item_options = array() ) {
    $menu_item = array_merge( array(
      'menu-item-title' => $page_title,
      'menu-item-status' => 'publish',
    ), $menu_item_options );

    $page = get_page_by_title( $page_title );

    if ( $page && $page->ID ) {
      $menu_item['menu-item-object-id'] = $page->ID;
      $menu_item['menu-item-object'] = 'page';
      $menu_item['menu-item-type'] = 'post_type';
      $menu_item['menu-item-url'] = get_permalink( $page->ID );
    } else {
      $menu_item['menu-item-url'] = $page_url;
    }

    return $menu_item;
  };

  function create_menu( $menu_name, $menu_items = array() ) {
    $menu_id = wp_create_nav_menu( $menu_name );

    foreach( $menu_items as $menu_item ) {
      wp_update_nav_menu_item( $menu_id, 0, $menu_item );
    }

    assign_menu_to_theme_location( $menu_id, strtolower( str_replace( ' ', '-', $menu_name ) ) );
  };

  function assign_menu_to_theme_location( $menu_id, $theme_location ) {
    // register menu to theme location
    $locations = get_theme_mod('nav_menu_locations');

    //set the menu to the new location and save into database
    $locations[$theme_location] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
  }

  function handle_active_menu_state( $classes, $item, $args = array() ) {
    if ( is_page( $item->title ) ) {
      array_push( $classes, 'current-menu-item' );
    }

    return array_unique( $classes );
  };

  function register_menu_locations() {
    $menu_locations = array(
      // array of menu locations
      // ie. 'header-menu' => __( 'Header Menu' ),
    );
    register_nav_menus(
    );
  };

  function populate_default_menus() {
    $menus = array(
      // array of menus to be created
      // ie. array(
      //   'name' => 'Header Menu',
      //   'items' => array(
      //     create_menu_item( 'About', home_url( '/about' ) ),
      //   ),
      // ),
    );

    foreach( $menus as $menu ) {
      if ( !wp_get_nav_menu_object( $menu['name']) ) {
        create_menu( $menu['name'], $menu['items'] );
      }
    }
  };

  add_action( 'after_setup_theme', 'register_menu_locations', 100 );
  add_action( 'after_setup_theme', 'populate_default_menus', 200 );
  add_filter( 'nav_menu_css_class', 'handle_active_menu_state', 10, 3 );
?>
