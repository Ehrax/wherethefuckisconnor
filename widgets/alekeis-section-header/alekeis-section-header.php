<?php

/*
Widget Name: Alekeis Section Header
Description: addas a nice heading for you're page.
Author: Alexander Rasputin
Author URI: https://alekei.me
Widget URI: https://alekei.me
*/

class Alekeis_Widget_Header extends SiteOrigin_Widget {
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'alekeis_widget_header',

      // The name of the widget for display purposes.
      'Alekeis Section Header',

      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
          'description' => 'This is adding the Section Header for you\'re page, you can choose if you
                            want to have a dark background.',
      ),

      //The $control_options array, which is passed through to WP_Widget
      array(),

      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array(
        'text' => array(
          'type' => 'text',
          'label' => __('Section Header goes here', 'siteorigin-widgets')
        ),
        'checkbox' => array(
          'type' => 'checkbox',
          'label' => __('Dark Background Heading?', 'widget-form-fields-text-domain')
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

siteorigin_widget_register('alekeis_widget_header', __FILE__, 'Alekeis_Widget_Header');
