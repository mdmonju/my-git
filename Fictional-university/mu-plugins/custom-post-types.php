<?php 

function custom_post_types(){
	// Event
	
	register_post_type('event' , array(
		'capability_type' => 'event',
		'map_meta_cap' => true,
		'rewrite' => array('slug' => 'events'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Event',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'view_item' => 'View Event',
			'singular_name' => 'Event',
		),
		'menu_icon' => 'dashicons-calendar',
		'supports' => array('excerpt','title','editor','thumbnail','comments',),
		
	));
	
	// Program
	
	register_post_type('Program' , array(
		'rewrite' => array('slug' => 'Programs'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Program',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'view_item' => 'View Program',
			'singular_name' => 'Program',
		),
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title','editor','comments',),
		
	));
	
	// Professor
	
	register_post_type('Professor' , array(
		'public' => true,
		'labels' => array(
			'name' => 'Professor',
			'add_new_item' => 'Add New Professor',
			'edit_item' => 'Edit Professor',
			'all_items' => 'All Professors',
			'view_item' => 'View Professor',
			'singular_name' => 'Professor',
		),
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title','editor','comments','thumbnail',),
		
	));
	
		// Note
	
	register_post_type('note' , array(
		'show_in_rest' => true,
		'public' => false,
		'show_ui' => true,
		'labels' => array(
			'name' => 'Notes',
			'add_new_item' => 'Add New Note',
			'edit_item' => 'Edit Note',
			'all_items' => 'All Notes',
			'view_item' => 'View Note',
			'singular_name' => 'Note',
		),
		'menu_icon' => 'dashicons-welcome-write-blog',
		'supports' => array('title','editor'),
		
	));
	
		// Home slider
	
	register_post_type('Slider' , array(
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Home Slider',
			'add_new_item' => 'Add New Slider',
			'edit_item' => 'Edit Slider',
			'all_items' => 'All Sliders',
			'view_item' => 'View Slider',
			'singular_name' => 'Slider',
		),
		'menu_icon' => 'dashicons-images-alt',
		'supports' => array('excerpt','title','editor','thumbnail'),
		
	));
	
}
add_action('init' , 'custom_post_types');



?>