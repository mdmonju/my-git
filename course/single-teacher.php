<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/news_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Teacher</h1>
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
								
								<div class="event_content">
									<div class="event_name"><a class="trans_200" style="font-size:36px" href="<?php the_permalink();?>"><?php the_title();?></a></div>
									<div class="card-text" style="margin-top:1px;color:black;"><?php the_field('teachers_subject');?></div>
						
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


