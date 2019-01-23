<?php

function our_theme_setup(){
	
// Register menu

register_nav_menus(array(
	'primary' => 'PRIMARY MENU' 
 	
));














}
add_action('after_setup_theme' , 'our_theme_setup');






