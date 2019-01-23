<?php 

function our_resources(){
	wp_enqueue_style('comment' , get_template_directory_uri() . '/assets/css/comments.css' , '' , '1.0.0');
	
	wp_enqueue_style('flaticon' , get_template_directory_uri() . '/assets/css/flaticon.css' , '' , '1.0.0');
	
	wp_enqueue_style('font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css' , '' , '1.0.0');
	
	wp_enqueue_style('animate' , get_template_directory_uri() . '/assets/css/animate.css' , '' , '1.0.0');
	
	wp_enqueue_style('text-animation' , get_template_directory_uri() . '/assets/css/text-animation.css' , '' , '1.0.0');
	
	wp_enqueue_style('jquery-fancybox-min' , get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' , '' , '1.0.0');
	
	wp_enqueue_style('magnific-popup-min' , get_template_directory_uri() . '/assets/css/magnific-popup.min.css' , '' , '1.0.0');
	
	wp_enqueue_style('owl-carousel-min' , get_template_directory_uri() . '/assets/css/owl.carousel.min.css' , '' , '1.0.0');
	
	wp_enqueue_style('layers' , get_template_directory_uri() . '/rs-plugin/css/layers.css' , '' , '1.0.0');
	
	wp_enqueue_style('settings' , get_template_directory_uri() . '/rs-plugin/css/settings.css' , '' , '1.0.0');
	
	wp_enqueue_style('bootstrap-min' , get_template_directory_uri() . '/assets/css/bootstrap.min.css' , '' , '1.0.0');
	
	wp_enqueue_style('plugins' , get_template_directory_uri() . '/assets/css/plugins.css' , '' , '1.0.0');
	
	wp_enqueue_style('icons-css' , get_template_directory_uri() . '/assets/css/icons.css' , '' , '1.0.0');
	
	wp_enqueue_style('menu-css' , get_template_directory_uri() . '/assets/css/menu-css.css' , '' , '1.0.0');
	
	wp_enqueue_style('main-css' , get_template_directory_uri() . '/assets/css/main.css' , '' , '1.0.0');
	
	wp_enqueue_style('responsive' , get_template_directory_uri() . '/assets/css/responsive.css' , '' , '1.0.0');
	
// jQuery
	
	wp_enqueue_script('jquery-min' , get_template_directory_uri() . '/assets/js/jquery.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('modernizr-js' , get_template_directory_uri() . '/assets/js/modernizr.js' , '' , '1.0.0');
	
	wp_enqueue_script('waypoints-min-js' , get_template_directory_uri() . '/assets/js/waypoints.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('bootstrap.min-js' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('plugins-js' , get_template_directory_uri() . '/assets/js/plugins.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-scrollUp-min' , get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js' , '' , '1.0.0');
	
	/*  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY"></script>   */
	
	wp_enqueue_script('gmaps' , get_template_directory_uri() . '/assets/js/gmaps.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-fancybox-min' , get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-magnific-popup-min' , get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('isotope-pkgd-min' , get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('counterup-min' , get_template_directory_uri() . '/assets/js/counterup.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('owl-carousel-min' , get_template_directory_uri() . '/assets/js/owl.carousel.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('wow-min' , get_template_directory_uri() . '/assets/js/wow.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-lettering' , get_template_directory_uri() . '/assets/js/jquery.lettering.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-textillate' , get_template_directory_uri() . '/assets/js/jquery.textillate.js' , '' , '1.0.0');
	
	wp_enqueue_script('mixitup-js' , get_template_directory_uri() . '/assets/js/mixitup.js' , '' , '1.0.0');
	
	wp_enqueue_script('chart-js' , get_template_directory_uri() . '/assets/js/chart.js' , '' , '1.0.0');
	
	wp_enqueue_script('chart-active-js' , get_template_directory_uri() . '/assets/js/chart-active.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-themepunch-tools-min' , get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('jquery-themepunch-revolution-min' , get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-actions-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.actions.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-kenburn-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-layeranimation-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-migration-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.migration.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-navigation-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.navigation.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-parallax-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.parallax.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution-extension-slideanims-min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('revolution.extension.video.min' , get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.video.min.js' , '' , '1.0.0');
	
	wp_enqueue_script('custom-js' , get_template_directory_uri() . '/assets/js/custom.js' , '' , '1.0.0');
	
/* 	wp_enqueue_style('comment-reply' , get_stylesheet_uri());
	if(is_singular()) wp_enqueue_script('comment-reply'); */

}
add_action('wp_enqueue_scripts' , 'our_resources');