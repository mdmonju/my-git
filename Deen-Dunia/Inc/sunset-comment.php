<?php

// sunset commment
function sunset_get_post_navigation(){
	
	if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ):
	
		require( get_template_directory() . '/inc/sunset-comment-nav.php' );
	
	endif;
	
}

?>