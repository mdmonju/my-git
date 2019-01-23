<?php

add_action('rest_api_init', 'deenduniaRegisterSearch');

function deenduniaRegisterSearch() {
  register_rest_route('deendunia/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'deenDuniaSearchResults'
  ));
}

function deenDuniaSearchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'page', 'books', 'masik-deen-dunia', 'kishor-deen-dunia'),
    's' => sanitize_text_field($data['term']),
	'posts_per_page' => -1
  ));

  $results = array(
    'generalInfo' => array(),
    'books' => array(),
    'masikdeendunias' => array(),
    'kishordeendunia' => array()
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

    if (get_post_type() == 'books') {
      array_push($results['books'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'masik-deen-dunia') {
      array_push($results['masikdeendunias'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'kishor-deen-dunia') {
      array_push($results['kishordeendunia'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }
  }

  return $results;

}