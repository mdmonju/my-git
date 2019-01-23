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
								<p><?php the_content();?></p>
							</div>
							<div class="comment-ins">
								<a href="#comments">Comments</a>
							</div>
						</div>
					</div>
					
					<!-- Comments -->

					

	    <!--		<div class="leave_comment">
						<div class="leave_comment_title">Leave a comment</div>

						<div class="leave_comment_form_container">
							<form action="post">
								<input id="comment_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
								<input id="comment_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<textarea id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button id="comment_send_btn" type="submit" class="comment_send_btn trans_200" value="Submit">send message</button>
							</form>
						</div>
					</div> -->
					
				<?php	
					endwhile;
					else: echo 'Nothing Found';
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


