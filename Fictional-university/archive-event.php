<?php 

get_header(); 
	pageBanner(array(
		'title' => 'Events',
		'subtitle' => "Don't forger to attend",
	));
?>

 
	
	<div class="container container--narrow page-section">
			<div class="metabox metabox--position-up metabox--with-home-link">
			  <p><a class="metabox__blog-home-link" href="<?php echo site_url('/past-events');?>">Checkout our past event archive</a></p>
			</div>
	
		<?php 
		
		while(have_posts()){
			the_post(); ?>
			
			<div class="event-summary">
			  <a class="event-summary__date t-center" href="#">
				<span class="event-summary__month"><?php 
					$eventDate = new DateTime(get_field('event_date'));
					echo $eventDate->format('M')
				?></span>
				<span class="event-summary__day"><?php 
					echo $eventDate->format('j')
				?></span>  
			  </a>
          <div class="event-summary__content">
            <h2 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <p><?php echo wp_trim_words(get_the_content(),50);?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
          </div>
        </div>
			
		<?php }
		
		?>
	
	<?php
		echo paginate_links();
	?>

	
	</div>


<?php 
get_footer();
?>