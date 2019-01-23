<?php 

function deendunia_feature() {
// for menu support
	register_nav_menus(array(
	'primary' => 'PRIMARY MENU' 
));
	add_theme_support('post-thumbnails');
	add_image_size('pageBanner' , 1350 , 447 , true );
}
add_action('after_setup_theme' , 'deendunia_feature');


?>