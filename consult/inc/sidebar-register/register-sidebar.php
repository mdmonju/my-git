<?php


// sidebar

function consult_widget(){
  register_sidebar( array(
		'name'              => __( 'Main Sidebar', 'theme-slug' ),
		'id'                => 'mainsidebar',       
		'description'       => __( 'This is main sidebar of consult blog page.', 'theme-slug' ),
		'before_widget'     => '<div class="blog_right_widget">',
		'after_widget'      => '</div>',
		'before_title'      => '<h3 class="blog_widget_title">',
		'after_title'       => '</h3>',
		) );
}

add_action('widgets_init' , 'consult_widget');






