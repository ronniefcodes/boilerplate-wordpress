<?php
  function get_posts_by_type( $post_type, $options = array() ) {
    $args = array(
      'post_type' => $post_type,
      'post_status' => 'publish',
      'orderby' => 'menu_order',
      'order' => 'asc',
      'numberposts' => -1
    );

    return get_posts( array_merge( $args, $options ) );
  }
?>
