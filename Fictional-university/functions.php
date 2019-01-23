<?php 
// calling enqueue file
require_once (get_template_directory() . '/inc/enqueue/enqueue.php');
// calling pagebanner file
require_once (get_template_directory() . '/inc/pagebanner/pagebanner.php');
// calling after setup theme file
require_once (get_template_directory() . '/inc/after-setup-theme/after-setup-theme.php');
// calling after setup theme file
require_once (get_template_directory() . '/inc/pre-get-posts/pre-get-posts.php');
// calling custom rest api init file
require_once (get_template_directory() . '/inc/custom-rest-init/custom-rest-init.php');
// calling search route file
require_once (get_template_directory() . '/inc/search-route/search-route.php');
// registration,login,logout
require_once (get_template_directory() . '/inc/registration-login-logout/registration-login-logout.php');
// note post private
require_once (get_template_directory() . '/inc/note-private/note-private.php');

function post_count(){

		$count_posts = wp_count_posts();
	
}

?>