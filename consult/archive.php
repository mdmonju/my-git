<?php get_header(); ?>

 <div class="page_title_banner blog_sidebar_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog Sidebar</h2>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Arhcive</li>
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
				
				if(have_posts()) :?> 
				
				<h1 class="archive_heding">
				
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
				
				
					<?php while(have_posts()) : the_post(); ?>
					
					<div class="blog_left_single_item">
							<div class="blog_pic image_fulwidth">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
									<h4 class="date_position"><?php echo get_the_date('j F Y');?></h4>
                            </div>
                            <div class="blog_left_single_content para_default">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(),15); ?></p>
                            </div>
                        </div><!-- blog_left_single_item -->
							
						<?php		endwhile;
							else: echo 'Nothing found';
							endif;
						?>
                        
                        <div class="blog_pagination">
                                <ul class="pagination pagination-lg">
									<?php the_posts_pagination( array(
										'mid_size'  => 2,
										'prev_text' => __( '<i class="flaticon-left-arrow"></i>', 'textdomain' ),
										'next_text' => __( '<i class="flaticon-right-arrow"></i>', 'textdomain' ),
									) );
									?>
                                </ul>
                        </div>
                    </div><!-- blog_left_side_area -->
					
                </div><!-- col-md-8 -->
				
			<!-- Call sidebar -->
                <?php get_sidebar();?>
			
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- blog_page_area -->

 <?php get_footer();?>