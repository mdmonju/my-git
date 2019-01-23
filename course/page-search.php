<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/news_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1><?php echo get_the_title();?></h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<?php 
					
					if(have_posts()):
						while(have_posts()):
							the_post(); ?>
					
					<div class="news_post_container">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_text">
								<?php get_search_form();?>
							</div>
						</div>
					</div>
					
					
				<?php	
					endwhile;
					else: echo 'Nothing Found';
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


