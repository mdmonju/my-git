<?php get_header();?>
	
<style>

.wpulike{
	display:none;
}

</style>	
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<?php pagebanner(); ?>
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
						<div class="about-author-image">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
							</div>
						<div class="news_post">
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


