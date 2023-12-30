<?php

function shihab_customizar_register($wp_customize){
    //Header Area Function
    $wp_customize->add_section('shihab_header_area', array(
        'title' =>__('Header Area', 'Almuheetu'),
        'description' => 'if you intersted to update your header area, you can do it here.'

    ));

    $wp_customize->add_setting('shihab_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'shihab_logo', array(
        'label' => 'Logo Upload',
        'description' => 'if you intersted to change or upload your logo , you can do it.',
        'setting' => 'shihab_logo',
        'section' => 'shihab_header_area',
    ) ));

    // Menu Position Option
    $wp_customize->add_section('shihab_menu_option', array(
        'title' => __('Menu Position Option', 'Almuheetu'),
        'description' => 'If you interested to change your menu position you can do it.'
      ));
    
      $wp_customize->add_setting('shihab_menu_position', array(
        'default' => 'right_menu',
      ));
    
      $wp_customize-> add_control('shihab_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'shihab_menu_position',
        'section' => 'shihab_menu_option',
        'type' => 'radio',
        'choices' => array(
          'left_menu' => 'Left Menu',
          'right_menu' => 'Right Menu',
          'center_menu' => 'Center Menu',
        ),
      ));

  // Footer Option
  $wp_customize->add_section('shihab_footer_option', array(
    'title' => __('Footer Option', 'Almuheetu'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('shihab_copyright_section', array(
    'default' => '&copy; Copyright 2023 | Almuheetu Shihab',
  ));

  $wp_customize-> add_control('shihab_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'shihab_copyright_section',
    'section' => 'shihab_footer_option',
  ));
}

add_action('customize_register', 'shihab_customizar_register');
