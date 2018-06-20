<?php

/*
Widget Name: Alekeis Section About
Description: add a nice about section
Author: Alexander Rasputin
Author URI: https://alekei.me
Widget URI: https://alekei.me
*/

class Alekeis_Section_About extends SiteOrigin_Widget {
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'alekeis_section_about',

      // The name of the widget for display purposes.
      'Alekeis Section About',

      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
          'description' => 'A nice about section with 3 pictures and a small text',
      ),

      //The $control_options array, which is passed through to WP_Widget
      array(),

      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array( 
        'heading_left' => array(
          'type' => 'text',
          'label' => __('Heading Left', 'widget-form-fields-text-domain')
        ),
        'picture_left' => array(
          'type' => 'media',
          'label' => __( 'Choose the left image', 'widget-form-fields-text-domain' ),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'picture_middle' => array(
          'type' => 'media',
          'label' => __( 'Choose the middle image', 'widget-form-fields-text-domain' ),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'picture_right' => array(
          'type' => 'media',
          'label' => __( 'Choose the right image', 'widget-form-fields-text-domain' ),
          'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
          'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
          'library' => 'image',
        ),
        'about_description' => array(
          'type' => 'textarea',
          'label' => __( 'Description on the right side of the About Page', 
                        'widget-form-fields-text-domain' ),
          'rows' => 10
        )
      ),

      //The $base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }

  
  function get_template_name($instance) {
    return 'template';
  }

  function get_template_dir($instance) {
      return 'templates';
  }

}

siteorigin_widget_register('alekeis_section_about', __FILE__, 'Alekeis_Section_About');
