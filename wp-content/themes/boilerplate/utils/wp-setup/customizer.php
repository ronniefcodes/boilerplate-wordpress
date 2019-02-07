<?php
  function add_field_with_text_control ( $wp_customize, $field_name, $field_options = array() ) {
    if ( $field_name ) {
      $wp_customize->add_setting(
        $field_name,
        array(
          'default' => array_key_exists( 'default_value', $field_options ) ? $field_options['default_value'] : '',
          'type' => array_key_exists( 'type', $field_options ) ? $field_options['type'] : 'theme_mod',
          'capability' => array_key_exists( 'capability', $field_options ) ? $field_options['capability'] : 'edit_theme_options'
        )
      );

      $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        $field_name,
        array(
          'label' => $field_options['label'],
          'description' => $field_options['description'],
          'settings' => $field_name,
          'priority' => array_key_exists( 'priority', $field_options ) ? $field_options['priority'] : 10,
          'section' => array_key_exists( 'section', $field_options ) ? $field_options['section'] : 'title_tagline',
          'type' => array_key_exists( 'type', $field_options ) ? $field_options['type'] : 'text',
        )
      ) );
    }
  };

  function register_additional_customizer_settings( $wp_customize ) {
    add_field_with_text_control( $wp_customize, 'seo_ga_key', array(
      'label' => 'Google Analytics Key',
      'description' => 'This is the Google Analytics key for the account tracking data for the website.',
    ) );
  };

  add_action( 'customize_register', 'register_additional_customizer_settings' );
?>
