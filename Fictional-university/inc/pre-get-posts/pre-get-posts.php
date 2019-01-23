<?php

function adjust_queries($query) {
	// for program post type
	if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
		$query->set('orderby','title');
		$query->set('order','ASC');
		$query->set('posts_per_page',-1);
		
	}
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

?>