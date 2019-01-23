<?php 

function university_feature(){
	register_nav_menu('mainmenu' , 'Main Menu');
	register_nav_menu('Footerleft' , 'Footer Left');
	register_nav_menu('Footerright' , 'Footer Right');
	add_theme_support('title-tag');
	// Thumbnail image
	add_theme_support('post-thumbnails');
	add_image_size('pageBanner' , 1500 , 350 , true );
	add_image_size('SliderBackground' , 1350 , 525 , true );
}
add_action('after_setup_theme' , 'university_feature');

?>