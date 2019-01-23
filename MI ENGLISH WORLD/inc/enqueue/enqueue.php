<?php 

function our_resources(){
//bootstrap
	wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , '' , '1.0.0');
//fontawesome
	wp_enqueue_style('fontawesome' , get_template_directory_uri() . '/css/font-awesome.min.css' , '' , '1.0.0');
//main css
	wp_enqueue_style('maincss' , get_template_directory_uri() . '/style.css' , '' , '1.0.0');
	
	
// jQuery
	wp_enqueue_script('jquery-min' , get_template_directory_uri() . '/js/jquery.min.js' , '' , '1.0.0');
// bootstrap
	wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js' , '' , '1.0.0');

}
add_action('wp_enqueue_scripts' , 'our_resources');