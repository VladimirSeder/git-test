<?php

// Register Custom Post Type
function custom_post_type_event() {

	$labels = array(
		'name'                  => _x( 'events', 'Post Type General Name', 'event' ),
		'singular_name'         => _x( 'event', 'Post Type Singular Name', 'event' ),
		'menu_name'             => __( 'Events', 'event' ),
		'name_admin_bar'        => __( 'Post Type', 'event' ),
		'archives'              => __( 'Item Archives', 'event' ),
		'attributes'            => __( 'Item Attributes', 'event' ),
		'parent_item_colon'     => __( 'Parent Item:', 'event' ),
		'all_items'             => __( 'All Items', 'event' ),
		'add_new_item'          => __( 'Add New Item', 'event' ),
		'add_new'               => __( 'Add New', 'event' ),
		'new_item'              => __( 'New Item', 'event' ),
		'edit_item'             => __( 'Edit Item', 'event' ),
		'update_item'           => __( 'Update Item', 'event' ),
		'view_item'             => __( 'View Item', 'event' ),
		'view_items'            => __( 'View Items', 'event' ),
		'search_items'          => __( 'Search Item', 'event' ),
		'not_found'             => __( 'Not found', 'event' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'event' ),
		'featured_image'        => __( 'Featured Image', 'event' ),
		'set_featured_image'    => __( 'Set featured image', 'event' ),
		'remove_featured_image' => __( 'Remove featured image', 'event' ),
		'use_featured_image'    => __( 'Use as featured image', 'event' ),
		'insert_into_item'      => __( 'Insert into item', 'event' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'event' ),
		'items_list'            => __( 'Items list', 'event' ),
		'items_list_navigation' => __( 'Items list navigation', 'event' ),
		'filter_items_list'     => __( 'Filter items list', 'event' ),
	);
	$args = array(
		'label'                 => __( 'event', 'event' ),
		'description'           => __( 'Description', 'event' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'comments' ),
		'rewrite' => array('slug' => 'events'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'menu_icon' => 'dashicons-controls-forward',
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'custom_post_type_event', 0 );



?>