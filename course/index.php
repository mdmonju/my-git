<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/news_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>The News</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-8">
					<div class="news_posts">
					
					<?php 
					
						if(have_posts()):while(have_posts()):the_post(); ?>
							
							<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div><?php echo get_the_date('j');?></div>
										<div><?php echo get_the_date('M');?></div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By <?php the_author_posts_link();?></a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#"><?php comments_popup_link('No Comment' , '1 Comment' , '% Comments' , 'comments_class' , 'Comment Off'); ?></a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p><?php the_excerpt();?></p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="<?php the_permalink();?>">Read More</a>
							</div>
						</div>
							
					<?php
					endwhile; endif;
					
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