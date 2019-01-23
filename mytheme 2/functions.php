<?php

// calling css file

function calling_resources(){
// comment css file
	wp_enqueue_style('commmen_style' , get_template_directory_uri().'/css/comment.css' , '', '1.0.0' );

//main css file	
	wp_enqueue_style('style' , get_stylesheet_uri(), '', '1.0.0' );
}
add_action('wp_enqueue_scripts' , 'calling_resources');

function our_theme_setup(){
	
// Menu

 register_nav_menus(array(
		'Primary' => __('Primary Menu'),
	)
);
//sidebar Ragistration

function our_sidebar_reg(){
	register_sidebar(array(
		'name' => 'Primary sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="sidebar floatleft">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidebar_heading">',
		'after_title' => '</div>',
	));
}
add_action('widgets_init' , 'our_sidebar_reg');

// Excerpt Function
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".'readmore'."'>Continue Reading &raquo;</a>";
	echo $excerpt;
}

// Featured Image

add_theme_support('post-thumbnails');

}
add_action('after_setup_theme' , 'our_theme_setup');

/* Custom Pagination */
function pagination($pages = '', $range = 4){ 
    $showitems = ($range * 2)+1;        
	global $paged;     
	if(empty($paged)) $paged = 1;      
	if($pages == ''){         
		global $wp_query;         
		$pages = $wp_query->max_num_pages;         
		if(!$pages){$pages = 1;}
	}
	if(1 != $pages){
		echo "<div class=\"pagination\"><span class=\"page_no\">(Page No- ".$paged." of ".$pages.")</span>";
		
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
				}
		} 
		if ($paged < $pages && $showitems < $pages) 
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
		echo "</div>\n";
	}}


// Custom Background 

$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


	
/*
// custom header

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

*/








