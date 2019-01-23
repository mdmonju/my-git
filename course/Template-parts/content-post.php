
	<div class="news_post search-result-news_post" style="margin-bottom:0;">
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
