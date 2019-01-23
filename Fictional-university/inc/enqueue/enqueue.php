<?php 

function our_resources(){

// custom google-font
wp_enqueue_style('google-fonts' , '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
// font-awesome
wp_enqueue_style('font-awesome' , '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

// main css file	
wp_enqueue_style('main-css' , get_stylesheet_uri(), NULL, microtime());
	
//js


// main js file
wp_enqueue_script('script-boundle' , get_theme_file_uri('/js/scripts-bundled.js') , NULL , microtime() , true);

// wp localize
  wp_localize_script('script-boundle', 'universityData', array(
    'root_url' => get_site_url(),
	'nonce' => wp_create_nonce('wp_rest')
  ));

}
add_action ('wp_enqueue_scripts' , 'our_resources');


?>