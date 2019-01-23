<?php 

// Page Banner

	function pageBanner($args = NULL){

	if( !$args['photo']){
		if(get_field('page_banner_background_image')){
			$args['photo'] = get_field ('page_banner_background_image')['sizes']['pageBanner'];
		} else{
			$args['photo'] = get_theme_file_uri('/images/news_background.jpg');
		}
	}
	

	?>
	
	
	<div class="home_background_container prlx_parent">
		<div class="home_background prlx" style="background-image:url(<?php echo $args['photo'];?>)"></div>
	</div>
	
	
<?php }



?>