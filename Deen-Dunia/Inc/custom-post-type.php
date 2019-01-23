<?php 

function custom_post_types(){
	
	// BOOks
	
	register_post_type('BOOkS' , array(
		'rewrite' => array('slug' => 'BOOKS'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Books',
			'add_new_item' => 'Add New BOOk',
			'edit_item' => 'Edit BOOk',
			'all_items' => 'All BOOKS',
			'view_item' => 'View BOOk',
			'singular_name' => 'BOOk',
		),
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('excerpt','title','editor','thumbnail','comments',),
		'taxonomies'  => array( 'category' ),
		
	));
	
	// Masik Deen Dunia
	
	register_post_type('masik-deen-dunia' , array(
		'rewrite' => array('slug' => 'masik-deen-dunia'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Masik Deen Dunia',
			'add_new_item' => 'Add New Masik Deen Dunia',
			'edit_item' => 'Edit Masik Deen Dunia',
			'all_items' => 'All Masik Deen Dunia',
			'view_item' => 'View Masik Deen Dunia',
			'singular_name' => 'Masik Deen Dunia',
		),
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('excerpt','title','editor','thumbnail',),
		
	));
	
		// shishu kishor deen dunia
	
	register_post_type('Kishor-Deen-Dunia' , array(
		'rewrite' => array('slug' => 'shishu-kishor-deen-dunia'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Shishu Kishor Deen Dunia',
			'add_new_item' => 'Add New Shishu Kishor Deen Dunia',
			'edit_item' => 'Edit Shishu Kishor Deen Dunia',
			'all_items' => 'All Shishu Kishor Deen Dunia',
			'view_item' => 'View Shishu Kishor Deen Dunia',
			'singular_name' => 'Shishu Kishor Deen Dunia',
		),
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('excerpt','title','editor','thumbnail',),
		
	));
	
	
}
add_action('init' , 'custom_post_types');








