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

				<h1 class="archive_heading">
				
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>

				<?php _e('Archive For'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>                                    

			<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>

				<?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

				<?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>                                        

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

				<?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>                                    

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

				<?php _e('Archive For'); ?> <?php the_time('Y'); ?>                                        

			<?php /* If this is a search */ } elseif (is_search()) { ?>

				<?php _e('Search Results'); ?>                            

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>

				<?php _e('Author Archive For'); ?> '<?php echo get_the_author(); ?>' 
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

				<?php _e('Blog Archives'); ?>                                        

	<?php } ?>							
				</h1>
				
				
		<?php		while(have_posts()) : the_post(); ?>
			<div id="article">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="post_meta"> 
					<span>Posted By:</span> <?php the_author_posts_link(); ?> |
							<span>Posted On:</span> <?php the_time('M d, Y'); ?> | 
							<span>Posted In:</span> <?php the_category(', '); ?>
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
			
			</div>
		</article>
			
			<?php get_sidebar();?>
			
		</div>
	</div>
<?php get_footer();?>