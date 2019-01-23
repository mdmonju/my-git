<?php 

// sidebar registration

function deendunia_widget(){
// main top sidebar
  register_sidebar( array(
		'name'              => __( 'Main Top Sidebar', 'theme-slug' ),
		'id'                => 'maintopsidebar',       
		'description'       => __( 'This is main Top sidebar of Deen Dunia blog page.', 'theme-slug' ),
		'before_widget'     => '<div class="sidebar_section">',
		'after_widget'      => '</div>',
		'before_title'      => '<div class="sidebar_section_title">',
		'after_title'       => '</div>',
		) );
		
//	main bottom sidebar
	register_sidebar( array(
		'name'              => __( 'Main Bottom Sidebar', 'theme-slug' ),
		'id'                => 'mainbottomsidebar',       
		'description'       => __( 'This is main bottom sidebar of Deen Dunia blog page.', 'theme-slug' ),
		'before_widget'     => '<div class="sidebar_section">',
		'after_widget'      => '</div>',
		'before_title'      => '<div class="sidebar_section_title">',
		'after_title'       => '</div>',
		) );
		
	//	Contact Information sidebar
	register_sidebar( array(
		'name'              => __( 'Contact Information Sidebar', 'theme-slug' ),
		'id'                => 'contactinformation',       
		'description'       => __( 'This is Contact Information sidebar.', 'theme-slug' ),
		'before_widget'     => '<div class="sidebar_section">',
		'after_widget'      => '</div>',
		'before_title'      => '<div class="contact_information_title">',
		'after_title'       => '</div>',
		) );
}

add_action('widgets_init' , 'deendunia_widget');


?>