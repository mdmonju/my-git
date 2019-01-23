<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/news_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Event</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<?php 
					
						if(have_posts()):while(have_posts()):the_post(); ?>
							
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
						
								</div>
								
							</div>
							<div class="content">
								<p><?php the_content();?></p>
							</div>
						</div>
							
					<?php
					endwhile;
					endif;
					
					?>

				</div>

				<!-- Sidebar Column -->
				<?php get_template_part('sidebar')?>
				
					
					
				
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php get_footer();?>


