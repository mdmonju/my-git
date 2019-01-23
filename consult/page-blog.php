<?php get_header();?>

				
				
	 <div class="page_title_banner blog_sidebar_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog Sidebar</h2>
                <ul class="breadcrumb">
                    <?php 
						if(function_exists('mj_wp_breadcrumb')){mj_wp_breadcrumb();}
					?>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->
	
	
    <div class="blog_page_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog_left_side_area">
						
						<?php 
				
						$ourCurrentPage = get_query_var('paged');
				
						$consult_main_blog  =new WP_Query(array(
							'post_type'=>'post',
							'paged'=>$ourCurrentPage,
							
								));
				
							if($consult_main_blog->have_posts()):while($consult_main_blog->have_posts()):$consult_main_blog->the_post();
				
						?>
							
						<div class="blog_left_single_item">
							<div class="blog_pic image_fulwidth">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
									<h4 class="date_position"><?php echo get_the_date('j F Y');?></h4>
                            </div>
                            <div class="blog_left_single_content para_default">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),50); ?></p>
                            </div>
                        </div><!-- blog_left_single_item -->
				
				<?php endwhile; 
				
				echo paginate_links(array(
				
				'total'=>$consult_main_blog->max_num_pages
				
				));
				
				else: echo 'Nothing found';
				endif; ?>
					    
						
                    </div><!-- blog_left_side_area -->
                </div><!-- col-md-8 -->
				
			<!-- Call sidebar -->
                <?php get_sidebar();?>
			
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- blog_page_area -->


 <?php get_footer();?>