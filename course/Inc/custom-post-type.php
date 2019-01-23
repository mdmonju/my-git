<?php 

function custom_post_types(){
	
	// Event
	
	register_post_type('Event' , array(
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'Events'),
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
	
	// Course
	
	register_post_type('Course' , array(
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'Courses'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Course',
			'add_new_item' => 'Add New Course',
			'edit_item' => 'Edit Course',
			'all_items' => 'All Courses',
			'view_item' => 'View Course',
			'singular_name' => 'Course',
		),
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('excerpt','title','editor','thumbnail','comments',),
		'taxonomies'  => array( 'category' ),
		
	));
	
	// service
	
	register_post_type('Service' , array(
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'Services'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Service',
			'add_new_item' => 'Add New Service',
			'edit_item' => 'Edit Service',
			'all_items' => 'All Services',
			'view_item' => 'View Service',
			'singular_name' => 'Service',
		),
		'menu_icon' => 'dashicons-admin-tools',
		'supports' => array('excerpt','title','editor',),
		
	));
	
	// Library
	
	register_post_type('Library' , array(
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'libraries'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Library',
			'add_new_item' => 'Add New Library',
			'edit_item' => 'Edit Library',
			'all_items' => 'All libraries',
			'view_item' => 'View Library',
			'singular_name' => 'Library',
		),
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('excerpt','title','editor','thumbnail',),
		
	));
	
	// Teacher
	
	register_post_type('Teacher' , array(
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'Teachers'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Teacher',
			'add_new_item' => 'Add New Teacher',
			'edit_item' => 'Edit Teacher',
			'all_items' => 'All Teachers',
			'view_item' => 'View Teacher',
			'singular_name' => 'Teacher',
		),
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('excerpt','title','editor','thumbnail',),
		
	));
	
		// My Note
	
	register_post_type('note' , array(
		'capability_type' => 'note',
		'map_meta_cap' => true ,
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
	
	
}
add_action('init' , 'custom_post_types');








