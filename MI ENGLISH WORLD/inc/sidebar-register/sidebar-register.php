<?php


// sidebar

function mi_english_world_widget(){
  register_sidebar( array(
		'name'              => __( 'Main Sidebar', 'theme-slug' ),
		'id'                => 'mainsidebar',       
		'description'       => __( 'This is main sidebar of Mi English World about page.', 'theme-slug' ),
		'before_widget'     => '<div class="our_mission">',
		'after_widget'      => '</div>',
		'before_title'      => '<h1 class="our_mission_heading"><span>',
		'after_title'       => '</span></h1>',
		) );
}

add_action('widgets_init' , 'mi_english_world_widget');

