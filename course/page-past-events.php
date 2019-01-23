<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/news_background.jpg')?>)"></div>
		</div>
		
		<div class="home_content">
			<h1>Past Events</h1>
		</div>
	</div>

	<!-- News -->
	<div class="checkout-element">
				<a href="<?php echo site_url('/Events');?>">Checkout our Upcoming event archive</a>
			</div>
	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					<div class="news_posts">
					
					<?php 
				$today = date('Ymd');
				$homepageEvent= new wp_Query(array(
					'post_type' => 'event',
					'posts_per_page' => -1,
					'meta_key' => 'event_date',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'event_date',
							'compare' => '<',
							'value' => $today,
							'type' => 'numeric'
						)
					)
					
				));
			
				if($homepageEvent->have_posts()):
				while($homepageEvent->have_posts()):
				$homepageEvent->the_post(); ?>
							
							<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day"><?php 
										$eventDate = new DateTime(get_field('event_date'));
										echo $eventDate->format('d')
										?></div>
															<div class="event_month"><?php 
										echo $eventDate->format('F')
										?></div>
									</div>
								</div>
								<div class="event_content">
									<div class="event_name"><a class="trans_200" style="font-size:36px" href="<?php the_permalink();?>"><?php the_title();?></a></div>
									<div class="event_location"><?php the_field('event_location');?></div>
									<p><?php if(has_excerpt()){
										echo get_the_excerpt();
									}else{
										echo wp_trim_words(get_the_content(),30);
									}
									
									?></p>
								</div>
								
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?php the_permalink();?>">Read More</a>
							</div>
						</div>
							
					<?php
					endwhile;
					else:
						echo'<h1 style="color:red;font-size:100px;">No Past Events Found</h1>';
					endif;
					
					?>
		
					</div>

					<!-- Page Nav -->

					<div class="news_page_nav">
						<?php echo paginate_links() ?>
					</div>

				</div>
				
			<!-- sidebar -->
			
			<?php get_template_part('sidebar')?>
			
			</div>
		</div>
	</div>

<?php get_footer();?>