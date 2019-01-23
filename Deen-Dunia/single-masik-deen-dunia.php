<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<?php pagebanner(); ?>
		<div class="home_content">
			<h1><?php the_title();?></h1>
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
							<div class="masik-deen-dunia-feature-images-container">
							<div class="news_post_image masik-deen-dunia-feature-image" style="border-right:3px solid white;">
								<?php the_post_thumbnail();?>
							</div>
							<div class="news_post_image masik-deen-dunia-feature-image"style="border-left:3px solid white;">
								<?php echo do_shortcode('[kdmfi_featured_image id="featured-image-2" size="full"]'); ?>
							</div>
							</div>
							
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p><?php the_content();?></p>
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


