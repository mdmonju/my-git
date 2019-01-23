<?php 


function our_resources(){

// wp_enqueue_style('style' , get_stylesheet_uri(), '' , '1.0.0');

wp_enqueue_style('bootstrap-min' , get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.css' , '' , '1.0.0');

wp_enqueue_style('fontawesome' , get_template_directory_uri() . '/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css' , '' , '1.0.0');

wp_enqueue_style('OwlCarouse' , get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.carousel.css' , '' , '1.0.0');

wp_enqueue_style('OwlCarouse-theme-default' , get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.theme.default.css' , '' , '1.0.0');

wp_enqueue_style('OwlCarouse-animation' , get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/animate.css' , '' , '1.0.0');

wp_enqueue_style('responsive-style' , get_template_directory_uri() . '/styles/responsive.css' , '' , '1.0.0');

wp_enqueue_style('news-style' , get_template_directory_uri() . '/styles/news_styles.css' , '' , '1.0.0');

wp_enqueue_style('news-responsive' , get_template_directory_uri() . '/styles/news_responsive.css' , '' , '1.0.0');

wp_enqueue_style('news-post-style' , get_template_directory_uri() . '/styles/news_post_styles.css' , '' , '1.0.0');

wp_enqueue_style('news-post-responsive' , get_template_directory_uri() . '/styles/news_post_responsive.css' , '' , '1.0.0');

wp_enqueue_style('courses_styles' , get_template_directory_uri() . '/styles/courses_styles.css' , '' , '1.0.0');
 
 wp_enqueue_style('teacher-style' , get_template_directory_uri() . '/styles/teachers_styles.css' , '' , '1.0.0');
 
 wp_enqueue_style('teacher-responsive-style' , get_template_directory_uri() . '/styles/teachers_responsive.css' , '' , '1.0.0');
 
 wp_enqueue_style('contact-style' , get_template_directory_uri() . '/styles/contact_styles.css' , '' , '1.0.0');
 
 wp_enqueue_style('contact-responsive-style' , get_template_directory_uri() . '/styles/contact_responsive.css' , '' , '1.0.0');

 wp_enqueue_style('main-style' , get_template_directory_uri() . '/styles/main_styles.css' , '' , '1.0.0');
 
 wp_enqueue_style('fontawesome' , get_template_directory_uri() . '/styles/fontawesome.min.css' , '' , '1.0.0');

wp_enqueue_style('courses_responsive_styles' , get_template_directory_uri() . '/styles/courses_responsive.css' , '' , '1.0.0');
//js

wp_enqueue_script('jquery-min' , get_template_directory_uri() . '/js/jquery-3.2.1.min.js' , '' , '1.0.0');

wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . '/styles/bootstrap4/popper.js' , '' , '1.0.0');

wp_enqueue_script('bootstrap-min-js' , get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js' , '' , '1.0.0');

wp_enqueue_script('TweenMax-min-js' , get_template_directory_uri() . '/plugins/greensock/TweenMax.min.js' , '' , '1.0.0');

wp_enqueue_script('TimelineMax-min-js' , get_template_directory_uri() . '/plugins/greensock/TimelineMax.min.js' , '' , '1.0.0');

wp_enqueue_script('ScrollMagic-min-js' , get_template_directory_uri() . '/plugins/scrollmagic/ScrollMagic.min.js' , '' , '1.0.0');

wp_enqueue_script('animation-min-js' , get_template_directory_uri() . '/plugins/greensock/animation.gsap.min.js' , '' , '1.0.0');

wp_enqueue_script('ScrollToPlugin-min-js' , get_template_directory_uri() . '/plugins/greensock/ScrollToPlugin.min.js' , '' , '1.0.0');

wp_enqueue_script('carousel-js' , get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.carousel.js' , '' , '1.0.0');

wp_enqueue_script('scrollTo-js' , get_template_directory_uri() . '/plugins/scrollTo/jquery.scrollTo.min.js' , '' , '1.0.0');

wp_enqueue_script('easing-js' , get_template_directory_uri() . '/plugins/easing/easing.js' , '' , '1.0.0');

wp_enqueue_script('custom-js' , get_template_directory_uri() . '/js/custom.js' , '' , '1.0.0');

wp_enqueue_script('news-custom-js' , get_template_directory_uri() . '/js/news_post_custom.js' , '' , '1.0.0');

wp_enqueue_script('courses_custom' , get_template_directory_uri() . '/js/courses_custom.js' , '' , '1.0.0');

wp_enqueue_script('courses_custom' , get_template_directory_uri() . '/js/teachers_custom.js' , '' , '1.0.0');

wp_enqueue_script('courses_custom' , get_template_directory_uri() . '/js/contact_custom.js' , '' , '1.0.0');



// script boundle
wp_enqueue_script('script-boundle' , get_theme_file_uri('/jssecond/scripts-bundled.js') , NULL , microtime() , true);
// wp localize
wp_localize_script('script-boundle', 'universityData', array(
    'root_url' => get_site_url(),
	'nonce' => wp_create_nonce('wp_rest')
  ));
}
add_action('wp_enqueue_scripts' , 'our_resources');




?>