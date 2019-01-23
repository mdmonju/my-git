
				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">
					<!-- Top sidebar for archive (design purpose) -->
						<?php dynamic_sidebar('maintopsidebar'); ?>
						
						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Latest posts</h3>
							</div>
							
							
								<?php 
								
								$sidebar_blog = new WP_Query(array(
								
								'post_type' => 'post',
								'posts_per_page' => 3,
								
								));
								
								if($sidebar_blog->have_posts()): 
								while($sidebar_blog->have_posts()):$sidebar_blog->the_post();
								
								?>
							
							<div class="latest_posts">
								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
									</div>
									<div class="latest_post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
									<div class="latest_post_meta">
										<span class="news_post_author"><a href="#">By <?php the_author_posts_link();?></a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#"><?php comments_popup_link('No Comment' , '1 Comment' , '% Comments' , 'comments_class' , 'Comment Off'); ?></a></span>
									</div>
								</div>
								
							</div>
						
						<?php 
							endwhile;
							endif;
						?>
						
						</div>

						<!-- Top sidebar for tags (design purpose) -->
						<?php dynamic_sidebar('mainbottomsidebar'); ?>
						

					</div>
				</div>