<?php get_header();?>
		<nav id="menu"> 
			
			<?php 
			
			$args = array(
				'theme_location' => 'Primary'
			);
			
			wp_nav_menu($args);
			
			?>
		</nav>
		<div class="content_wrap ">
		<article> 
			<div class="article_wrap floatleft "> 
			
			<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					
			<div id="article">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="post_meta"> 
					<span>Posted By:</span> <?php the_author_posts_link(); ?> |
							<span>Posted On:</span> <?php the_time('M d, Y'); ?> | 
							<span>Posted In:</span> <?php the_category(', '); ?> |
						<?php comments_popup_link('No comment' , '1 Comment' , '% Comments' , 'comment_style' , 'Comment Off'); ?>
				</div>
				
				<div class="featured_image"> 
					<?php the_post_thumbnail(); ?>
				</div>
				
				<p><?php echo excerpt('40'); ?></p>
			 </div>
			<?php	endwhile;
				else: 
				  echo('Nothing Found');
				endif;
			?>  
			
			<div class="preandnext"> 
				<span class="pre"><?php next_posts_link('Next &raquo;');?></span> 
				<span class="nxt"><?php previous_posts_link('&laquo; previous'); ?></span>
			</div>
			
			<?php
				if(function_exists('pagination')){
					pagination($additional_loop -> max_num_pages);
				}
			?>
			
			</div>
		</article>
			
			<?php get_sidebar();?>
			
		</div>
	</div>
<?php get_footer();?>