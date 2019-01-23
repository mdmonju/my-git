<?php 

function pageBanner($args = NULL){
	
	if( !$args['title']){
		$args['title'] = get_the_title();
	}
	
	if( !$args['subtitle']){
		$args['subtitle'] = get_field('page_banner_subtitle');
	}
	
	if( !$args['photo']){
		if(get_field('page_banner_background_image')){
			$args['photo'] = get_field ('page_banner_background_image')['sizes']['pageBanner'];
		} else{
			$args['photo'] = get_theme_file_uri('/images/ocean.jpg');
		}
	}
	

	?>
	
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'];?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h3 class="page-banner__title"><?php echo $args['title']; ?></h3>
      <div class="page-banner__intro">
        <span style="font-size:25px;"><?php echo $args['subtitle']; ?></span>
      </div>
    </div>  
</div>
	
<?php }

?>