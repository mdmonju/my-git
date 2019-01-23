<?php 

add_filter( 'kdmfi_featured_images', function( $featured_images ) {

  // Add featured-image-2 to pages only
  $args_2 = array(
    'id' => 'featured-image-2',
    'desc' => 'Your description here.',
    'label_name' => 'Featured Image 2',
    'label_set' => 'Set featured image 2',
    'label_remove' => 'Remove featured image 2',
    'label_use' => 'Set featured image 2',
    'post_type' => array( 'masik-deen-dunia' , 'Kishor-Deen-Dunia' ),
  );

  // Add the featured images to the array, so that you are not overwriting images that maybe are created in other filter calls
  $featured_images[] = $args_1;
  $featured_images[] = $args_2;

  // Important! Return all featured images
  return $featured_images;
});

?>