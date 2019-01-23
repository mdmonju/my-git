<!-- call header -->
<?php get_header();?>
<!-- call Slider -->           
<?php get_template_part('slider')?>
    
    <div class="looking_for_specific_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking_for_left para_default">
                        <h3 style="color:<?php echo cs_get_option('color1');?>"><?php echo cs_get_option('fields_1');?></h3>
                        <p style="color:<?php echo cs_get_option('color2');?>"><?php echo cs_get_option('fields_2');?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="looking_for_right image_fulwidth field_image wow fadeInRight" data-wow-delay="300ms">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields_3'),'full')[0]; ?>">
                    </div>
                </div>
            </div><!--row -->
        </div><!--container -->
    </div><!--looking_for_specific_area -->
	
	<div class="why_choose_us_area">
        <div class="container">
            <div class="row">
				<div class="item single_blog_item_div para_default text-center">
					<h2><a style="color:<?php echo cs_get_option('color3');?>"><?php echo cs_get_option('Heading_1');?></a></h2>
				</div>
				
			<?php

			$grp_sec_1=cs_get_option('fields_group_1');
			if(is_array($grp_sec_1)){
			foreach($grp_sec_1 as $grp_value_1){ ?>
				
						<div class="col-md-4 col-sm-6">
							<div class="choose_us_single para_default image_fulwidth text-center wow fadeInLeft" data-wow-delay="300ms">
							<img src="<?php echo esc_url ( wp_get_attachment_image_src ( $grp_value_1['fields_6'], 'full' )[0]);?>">
								 
								<h3><?php echo esc_html ($grp_value_1['fields_4'])?></h3>
								<p><?php echo esc_html ($grp_value_1['fields_5'])?></p>
							</div>
						</div><!--col-md-4 -->	
			<?php }
			}

			?>
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
	
    <div class="about_section_area">
        <div class="container-fluid">
            <div class="row">
			
				<div class="item single_blog_item_div para_default text-center">
					<h2><a style="color:<?php echo cs_get_option('color4');?>"><?php echo cs_get_option('Heading_2');?></a></h2>
				</div>
				
			<?php
			$grp_sec_2=cs_get_option('fields_group_2');
			if(is_array($grp_sec_2)){
			foreach($grp_sec_2 as $grp_value_2){ ?>
				
                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
                        <i class="<?php echo esc_html ($grp_value_2['icon1'])?>"></i>
                        <h3><?php echo esc_html ($grp_value_2['fields_7'])?></h3>
                        <p><?php echo esc_html ($grp_value_2['fields_8'])?></p>
                    </div>
                </div><!--col-md-4 -->
				
			<?php }
			}

			?>
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
	
	
	
	<div class="latest_blog_section_area removeBg_latest_blog">
        <div class="container">
            <div class="row">
				<div class="item single_blog_item_div para_default text-center">
					<h2><a style="color:<?php echo cs_get_option('color5');?>"><?php echo cs_get_option('Heading_3');?></a></h2>
				</div>
				
				<?php 
				
					 $home_blog  =new WP_Query(array(
					  'post_type'=>'post',
					
					  'posts_per_page'=>3,
					  ));
				
				if($home_blog->have_posts()):while($home_blog->have_posts()):$home_blog->the_post();
				
				?>
				
				
               <div class="col-md-4">
                    <div class="single_blog_h_active">
                        <div class="single_blog_item_area para_default image_fulwidth text-center">
                            <a href="#"><?php the_post_thumbnail();?></a>
                            <h4><?php echo get_the_date('F j Y');?></h4>
                            <h3><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_content(),15); ?></p>
                        </div>
					</div>
				</div>
				
				<?php endwhile; endif; ?>
            </div>
        </div> 
	</div>
	
<?php get_footer();?>
    
 