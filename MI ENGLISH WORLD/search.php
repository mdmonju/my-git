<?php get_header();?>
	<!-- content -->
	
	<section id="content"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-7"> 
					<?php 
					if(have_posts()): ?>
					
					<h1 class="search_result_for"> 
						Search Result For '<?php the_search_query();?>'
					</h1>
					
					
				<?php		while(have_posts()): the_post(); ?>
						
					<article id="main_article_single">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>	
							<div class="featured_image">
								<?php the_post_thumbnail();?>
							</div>
					</article>
						
				<?php endwhile;
					else:
						echo ('Nothing found');
					
					endif;
				?>
				</div>
				
		<!-- sidebar -->		
				<?php get_sidebar();?>
			</div>
		</div>
	</section>
	
<?php get_footer();?>