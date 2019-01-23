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
				
				if(have_posts()) : ?>
				
				<h1 class="search_result_for">Search Result For '<?php the_search_query(); ?>'</h1>
				
				<?php	while(have_posts()) : the_post(); ?>
				
			<div id="article">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="post_meta"> 
					<span>Posted By:</span> <?php the_author_posts_link(); ?> |
							<span>Posted On:</span> <?php the_time('M d, Y'); ?> | 
							<span>Posted In:</span> <?php the_category(', '); ?>
				</div>
				
				<p><?php the_content(); ?></p>
			 </div>
			<?php	endwhile;
				else: 
				  echo('Nothing Found');
				endif;
			?>  
			
			</div>
		</article>
			
			<?php get_sidebar();?>
			
		</div>
	</div>
<?php get_footer();?>