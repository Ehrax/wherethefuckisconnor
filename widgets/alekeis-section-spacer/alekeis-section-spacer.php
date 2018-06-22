<?php

/*
Widget Name: Alekeis Section Spacer
Description: a simple widget
Author: Alexander Rasputin
Author URI: https://alekei.me
Widget URI: https://alekei.me
*/

class Alekeis_Section_Spacer extends SiteOrigin_Widget {
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'alekeis_section_spacer',

      // The name of the widget for display purposes.
      'Alekeis Section Spacer',

      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
          'description' => 'A simple spacer, with or without a tattoo needle',
      ),

      //The $control_options array, which is passed through to WP_Widget
      array(),

      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array(
        'checkbox' => array(
          'type' => 'checkbox',
          'label' => __('Tattoo Needle in the middle?', 'widget-form-fields-text-domain'),
          'default' => true
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

siteorigin_widget_register('alekeis_section_spacer', __FILE__, 'Alekeis_Section_Spacer');
