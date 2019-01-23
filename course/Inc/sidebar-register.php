<?php 

// sidebar registration

function consult_widget(){
// main top sidebar
  register_sidebar( array(
		'name'              => __( 'Main Top Sidebar', 'theme-slug' ),
		'id'                => 'maintopsidebar',       
		'description'       => __( 'This is main Top sidebar of consult blog page.', 'theme-slug' ),
		'before_widget'     => '<div class="sidebar_section">',
		'after_widget'      => '</div>',
		'before_title'      => '<div class="sidebar_section_title">',
		'after_title'       => '</div>',
		) );
		
//	main bottom sidebar
	register_sidebar( array(
		'name'              => __( 'Main Bottom Sidebar', 'theme-slug' ),
		'id'                => 'mainbottomsidebar',       
		'description'       => __( 'This is main bottom sidebar of consult blog page.', 'theme-slug' ),
		'before_widget'     => '<div class="sidebar_section">',
		'after_widget'      => '</div>',
		'before_title'      => '<div class="sidebar_section_title">',
		'after_title'       => '</div>',
		) );
}

add_action('widgets_init' , 'consult_widget');


?>