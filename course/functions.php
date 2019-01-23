<?php 

//enqueue file
require_once(get_template_directory() . '/inc/enqueue.php');
// navwalker file
require_once(get_template_directory() . '/inc/navwalker.php');
// custom comment field file
require_once(get_template_directory() . '/inc/custom-comment-field.php');
//sidebar register
require_once(get_template_directory() . '/inc/sidebar-register.php');
//custom post type
require_once(get_template_directory() . '/inc/custom-post-type.php');
//search rout type
require_once(get_template_directory() . '/inc/search-route.php');
//registration, login, logout
require_once(get_template_directory() . '/inc/registration-login-logout.php');

function course_feature() {
// for menu support
	register_nav_menus(array(
	'primary' => 'PRIMARY MENU' 
));
	add_theme_support('post-thumbnails');

}
add_action('after_setup_theme' , 'course_feature');

// sunset commment
function sunset_get_post_navigation(){
	
	if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ):
	
		require( get_template_directory() . '/inc/sunset-comment-nav.php' );
	
	endif;
	
}

/* Activate HTML5 features */
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', ) );

function adjust_queries($query) {
	// for event post type
	if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
		$today = date('Ymd');
		$query->set('meta_key','event_date');
		$query->set('orderby','meta_value_num');
		$query->set('order','ASC');
		$query->set('meta_query',array(
			'key' => 'event_date',
			'compare' => '>=',
			'value' => $today,
			'type' => 'numeric'
		));
	}
}
add_action('pre_get_posts','adjust_queries');

function course_custom_rest() {
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() {return get_the_author();}
  ));

  register_rest_field('note', 'userNoteCount', array(
    'get_callback' => function() {return count_user_posts(get_current_user_id(), 'note');}
  ));
}

add_action('rest_api_init', 'course_custom_rest');


// Force note posts to be private
add_filter('wp_insert_post_data', 'makeNotePrivate', 10, 2);

function makeNotePrivate($data, $postarr) {
  if ($data['post_type'] == 'note') {
    if(count_user_posts(get_current_user_id(), 'note') > 4 AND !$postarr['ID']) {
      die("You have reached your note limit.");
    }

    $data['post_content'] = sanitize_textarea_field($data['post_content']);
    $data['post_title'] = sanitize_text_field($data['post_title']);
  }

  if($data['post_type'] == 'note' AND $data['post_status'] != 'trash') {
    $data['post_status'] = "private";
  }
  
  return $data;
}