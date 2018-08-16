<?php
/*function custom_post_types() {
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'custom_post_types');*/
include get_template_directory() . '/inc/cpt.php';

function add_files() {
    wp_enqueue_style('add_main_styles', get_stylesheet_uri(), microtime());
  }
  add_action('wp_enqueue_scripts', 'add_files');

register_nav_menu('headerMenuLocation', 'Header Menu Location'); 