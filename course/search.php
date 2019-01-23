<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/news_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Search Results</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
			<div class="col-lg-8">
					<?php 
						if(have_posts()):
							while(have_posts()):
								the_post(); ?>
						<div class="search-results-content">
							<?php	get_template_part('template-parts/content' , get_post_type()); ?>
						</div>
						
				<?php	endwhile;
					endif;
					?>
				<!-- Page Nav -->
						<div class="news_page_nav">
							<?php echo paginate_links() ?>
						</div>
				<div style="margin-top:100px;">
					<?php get_search_form();?>
				</div>
			</div>
			<?php get_template_part('/sidebar');?>
			</div>
		</div>
	</div>

<?php get_footer();?>