
<div class="news_post">
	<div class="news_post_image">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="news_post_top d-flex flex-column flex-sm-row">
		<div class="news_post_date_container">
			<div class="event_date d-flex flex-column align-items-center justify-content-center">
				<div class="event_day"><?php 
					$eventDate = new DateTime(get_field('event_date'));
					echo $eventDate->format('d')?>
				</div>
				<div class="event_month"><?php 
					echo $eventDate->format('F')?>
				</div>
			</div>
		</div>
		<div class="event_content">
			<div class="event_name"><a class="trans_200" style="font-size:36px" href="<?php the_permalink();?>"><?php the_title();?></a></div>
				<div class="event_location"><?php the_field('event_location');?></div>
					<p><?php if(has_excerpt()){
							echo get_the_excerpt();
							}else{
							echo wp_trim_words(get_the_content(),30);
						}?>
					</p>
		</div>
								
	</div>
			<div class="news_post_button text-center trans_200">
				<a href="<?php the_permalink();?>">Read More</a>
			</div>
</div>
