<?php

add_action('rest_api_init', 'courseRegisterSearch');

function courseRegisterSearch() {
  register_rest_route('course/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'courseSearchResults'
  ));
}

function courseSearchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'page', 'teacher', 'course', 'library', 'event' , 'service'),
    's' => sanitize_text_field($data['term']),
	'posts_per_page' => -1
  ));

  $results = array(
    'generalInfo' => array(),
    'teachers' => array(),
    'libraries' => array(),
    'events' => array(),
    'services' => array(),
    'courses' => array(),
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author()
      ));
    }

    if (get_post_type() == 'course') {
      array_push($results['courses'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'teacher') {
      array_push($results['teachers'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'event') {
      array_push($results['events'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'service') {
      array_push($results['services'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }
    if (get_post_type() == 'library') {
      array_push($results['libraries'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }
    
  }

  return $results;

}