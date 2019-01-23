<?php

// Excerpt Function
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".'readmore'."'>...</a>";
	echo $excerpt;
}



