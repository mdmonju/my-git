<?php get_header();?>

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg')?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Welcome!</h1>
      <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
      <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
      <a href="<?php  echo get_post_type_archive_link('program');?>" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
        
			<?php 
				$today = date('Ymd');
				$homepageEvent= new wp_Query(array(
					'post_type' => 'event',
					'posts_per_page' => 2,
					'meta_key' => 'event_date',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'event_date',
							'compare' => '>=',
							'value' => $today,
							'type' => 'numeric'
						)
					)
					
				));
			
			if($homepageEvent->have_posts()): 
			while($homepageEvent->have_posts()):
			$homepageEvent->the_post(); 
			
			get_template_part('template-part/event-summery');
			
				endwhile; endif;
			?>
			
        <p class="t-center no-margin"><a href="<?php echo site_url('/events');?>" class="btn btn--blue">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

		<?php 
			$home_blog  =new WP_Query(array(
			  'post_type'=>'post',
					
			  'posts_per_page'=>2,
		  ));
				
				if($home_blog->have_posts()):while($home_blog->have_posts()):$home_blog->the_post();?>
		
		
		<div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month"><?php echo get_the_date('M');?></span>
            <span class="event-summary__day"><?php echo get_the_date('j');?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php  the_permalink();?>"><?php the_title();?></a></h5>
            <p><?php if(has_excerpt()){
				echo get_the_excerpt();
			} else{
				echo wp_trim_words(get_the_content(), 18);
			} ?> <a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>
          </div>
        </div>
		
	<?php endwhile; endif; ?>    
	
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog');?>" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
  	<?php 
	
		$homeSlider = new WP_Query(array(
			'post_type' => 'Slider',
			'post_per_page' => 5,
		));
		
		if($homeSlider->have_posts()):
			while($homeSlider->have_posts()):
				$homeSlider->the_post(); 

				
				?>
	

  <div class="hero-slider__slide" style="background: url(<?php 
		echo get_the_post_thumbnail_url( $post_id ); ?>) no-repeat; background-size:cover;">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
        <p class="t-center"><?php if(has_excerpt()){
				echo get_the_excerpt();
			} else{
				echo wp_trim_words(get_the_content(), 10);
			} ?></p>
        <p class="t-center no-margin"><a href="<?php the_permalink();?>" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>

  
  <?php
	endwhile;
	endif;
  ?>
</div>

<?php get_footer();?>
