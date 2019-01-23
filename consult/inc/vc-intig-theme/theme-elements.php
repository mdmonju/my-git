<?php

// Section 1

function consult_section_1($attr){
	
	extract(
	
	shortcode_atts(array(
	
	'section_1_title'       	  =>'No title found',
	'section_1_description' 	  =>'Sorry! NO description found.',
	'section_1_title_color' 	  =>'',
	'section_1_description_color' =>'',
	'section_1_image' =>'',
	
	),$attr)
	
	);
	
	ob_start(); ?>
	
	<div class="looking_for_specific_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking_for_left para_default">
                        <h3 style="color:<?php echo esc_html($section_1_title_color);?>"><?php echo esc_html($section_1_title);?></h3>
                        <p style="color:<?php echo esc_html($section_1_description_color);?>"><?php echo esc_html($section_1_description);?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
						<?php  
							$sec_1_img = wp_get_attachment_image_src($section_1_image,'full');
							
						if($sec_1_img){ ?>
							
							<img src="<?php echo esc_url($sec_1_img [0]);?>">
							
						<?php }
						?>
                    </div>
                </div>
            </div><!--row -->
        </div><!--container -->
    </div><!--looking_for_specific_area -->
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('section_1_base','consult_section_1');

// end section 1

// Section 2

function consult_section_2($attr){
	
	extract(
	
	shortcode_atts(array(
	
	'sec_2_grp'        =>'',
	'section_2_title'        =>'No title found',
	'section_2_description'  =>'Sorry! Nothing found',
	'section_2_icon'       	 =>'',
	'section_2_image'       	 =>'',
	
	),$attr)
	
	);
	
	ob_start(); ?>
	
	   <div class="about_section_area">
        <div class="container-fluid">
            <div class="row">
			
			 <?php 

           $sec_2_key =vc_param_group_parse_atts($sec_2_grp);
		   
		   foreach($sec_2_key as $sec_2_value){?>
			   
			     <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">  		
						<?php
						$sec2_image =wp_get_attachment_image_src($sec_2_value['section_2_image'],'full');
						
						if($sec2_image){?>
							
						
							 <img src="<?php echo esc_url($sec2_image[0]);?>">
							
						<?php }
						
						?>
					
					
                        <i class="<?php echo esc_attr($sec_2_value['section_2_icon']);?>"></i>
                        <h3><?php echo esc_html($sec_2_value['section_2_title']);?></h3>
                        <p><?php echo esc_html($sec_2_value['section_2_description']);?></p>
                    </div>
                </div><!--col-md-4 -->
				
		 <?php }
		 
		 	   ?>
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('section_2_base','consult_section_2');

// end section 2

// Section 3

function consult_section_3($attr){
	
	extract(
	
	shortcode_atts(array(
	
	'sec_3_grp'        =>'',
	'section_3_title'        =>'No title found',
	'section_3_description'  =>'Sorry! Nothing found',
	'section_3_icon'       	 =>'',
	'section_3_image'       	 =>'',
	
	),$attr)
	
	);
	
	ob_start(); ?>
	
	   <div class="about_section_area">
        <div class="container-fluid">
            <div class="row">
			
			 <?php 

           $sec_3_key =vc_param_group_parse_atts($sec_3_grp);
		   
		   foreach($sec_3_key as $sec_3_value){?>
			   
			     <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">  		
						<?php
						$sec3_image =wp_get_attachment_image_src($sec_3_value['section_3_image'],'full');
						
						if($sec3_image){?>
							
						
							 <img src="<?php echo esc_url($sec3_image[0]);?>">
							
						<?php }
						
						?>
					
					
                        <i class="<?php echo esc_attr($sec_3_value['section_3_icon']);?>"></i>
                        <h3><?php echo esc_html($sec_3_value['section_3_title']);?></h3>
                        <p><?php echo esc_html($sec_3_value['section_3_description']);?></p>
                    </div>
                </div><!--col-md-4 -->
				
		 <?php }
		 
		 	   ?>
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('section_3_base','consult_section_3');

// end section 3


// start home blog


function consult_home_blog($attr){
	
	extract(
	
	shortcode_atts(array(
		'sec_blog_title'=>'',
	
	),$attr)
	
	);
	
	ob_start(); ?>


	    <div class="latest_blog_section_area removeBg_latest_blog">
        <div class="container">
            <div class="row">
				<div class="item single_blog_item_div para_default text-center">
					<h2><a><?php echo esc_html($sec_blog_title);?></a></h2>
				</div>
				
				<?php 
				
				 $consult_home_blog  =new WP_Query(array(
					  'post_type'=>'post',
					
					  'posts_per_page'=>3,
					  ));
				
				 if($consult_home_blog->have_posts()):while($consult_home_blog->have_posts()):$consult_home_blog->the_post();
				
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
        </div><!-- container-->
    </div><!-- latest_blog_section_area-->
	
		<?php
	return ob_get_clean();
	
}
add_shortcode('section_blog','consult_home_blog');
	
// our mission

function our_mission($attr){
	
	extract(
	
	shortcode_atts(array(
	
	'our_mission_title'       	  =>'',
	'our_mission_description'  =>'Sorry! Nothing found',
	'our_mission_title_color' 	  =>'',
	'our_mission_description_color' =>'',
	'our_mission_image' =>'',
	
	),$attr)
	
	);
	
	ob_start(); ?>
	
	 <div class="col-md-12">
        <div class="col-md-6">
            <div class="image_fulwidth wow fadeInLeft" data-wow-delay="300ms">
                <?php  
							$our_mission_img = wp_get_attachment_image_src($our_mission_image,'full');
							
						if($our_mission_img){ ?>
							
							<img src="<?php echo esc_url($our_mission_img [0]);?>">
							
						<?php }
						?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tab_text_ser para_default">
                 <h3 style="color:<?php echo esc_html($our_mission_title_color);?>"><?php echo esc_html($our_mission_title);?></h3>
                 <p style="color:<?php echo esc_html($our_mission_description_color);?>"><?php echo esc_html($our_mission_description);?></p>
            </div>
        </div>
     </div>
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('our_mission_base','our_mission');

// end our mission	
	
?>