<?php get_header();?>  
    <div class="page_title_banner banner_blog_single_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog single</h2>
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
				
				
				
				
					<?php 
						if(have_posts()): 
							while(have_posts()): the_post(); ?>
					
					
					  <div class="blog_left_side_area">
					
                        <div class="blog_pic image_fulwidth">
                           <?php the_post_thumbnail(); ?>
                            <h4 class="date_position"><?php echo get_the_date('j F Y');?></h4>
                        </div>

                        <div class="blog_left_single_content blog_single_content para_default">
                            <h3><?php the_title();?></h3>
                            <p><?php the_content();?></p>
                        </div>

                        <div class="blog_tag">
                         <?php the_tags( ' ', ' ', ' ' ); ?> 
                        </div>

                        <div class="share_blog_single_in_social">
                            <h4>
                                <span>Share</span> 
                                <a href="http://www.facebook.com/sharer.php?url=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
								
								<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
								
								<a href="https://plus.google.com/share?url=<?php the_permalink();?>"><i class="fa fa-google-plus"></i></a>
								
                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i></a>
                            </h4>
                        </div>
						
			             <div class="content_blog_a fix">
							<div class="e_blog_A">
								<?php echo get_avatar(get_the_author_meta('ID'),100);?>
							</div>
							<div class="blog_a_text">
								<h5><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>"><?php the_author();?></a></h5>
								<p><?php  echo get_the_author_meta('description');?></p>
							</div>
						</div>
					
					<?php comments_template();?>

				<!--	<div class="consultency_comments_form">
                            <h2 class="comments_title">Leave a Reply</h2>
                            <div class="row">
                                <form action="#" method="post">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail*">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="url" class="form-control" placeholder="Website">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Your Comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="send_me_ph">
                                                <a class="submit_btn_quick_contact" href="#">Submit Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  -->
						
						
                    </div><!-- blog_left_side_area -->
					
					
					<?php		endwhile;
							else: echo 'Nothing found';
							endif;
					?>
				
                </div><!-- col-md-8 -->
				
		<!-- Call sidebar -->
		
                <?php get_sidebar();?>
				
            </div><!-- row -->  
			
        </div><!-- container -->
		
    </div><!-- blog_page_area -->
			
<?php get_footer();?>