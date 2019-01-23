
	<div class="news_post"style="margin-bottom:0;">
		<div class="news_post_image">
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<div class="news_post_top d-flex flex-column flex-sm-row">
			<div class="news_post_title_container">
				<div class="news_post_title">
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</div>
			</div>
		</div>
		<div class="news_post_text">
			<p><?php the_excerpt();?></p>
		</div>
		<div class="news_post_button text-center trans_200">
			<a href="<?php the_permalink();?>">View <?php the_title();?></a>
		</div>
	</div>