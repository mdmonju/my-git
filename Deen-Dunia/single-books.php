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
							<div class="news_post_image">
								<?php the_post_thumbnail();?>
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
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
					<?php endwhile;
							endif;
					?>
				</div>

				<!-- Sidebar Column -->
				<?php get_template_part('sidebar')?>
				
				<div class="col-lg-8">
					<?php 
						if(comments_open()):
						comments_template();
						endif;
					?>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php get_footer();?>


