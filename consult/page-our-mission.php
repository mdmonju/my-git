<!-- call header -->
<?php get_header();?>

<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->
    <div class="page_title_banner not_found_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">About Us</h2>
                <ul class="breadcrumb">
                    <?php 
						if(function_exists('mj_wp_breadcrumb')){mj_wp_breadcrumb();}
					?>
                </ul>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->

    <div class="about_page_tab_section_area">
        <div class="container">
            <div class="row">
                <div class="about_us_tab_area">
                    <div class="tab_menu_s_p_two">
                        <div class="col-md-12">
                            <ul class="tab_button_service">
                                <?php
				
									wp_nav_menu(array(
										'theme_location'  => 'About_us',
										'container' 	  => 'ul',
										'container_class' => 'tab_button_service',
										'menu_class'	  => 'nav navbar-nav',
										'depth' 		  =>  5,
										'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
										'walker'          => new WP_Bootstrap_Navwalker(),
									));
									
									
								?>
                            </ul>
                        </div>

                       
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="image_fulwidth wow fadeInLeft" data-wow-delay="300ms">
                                                <img src="<?php echo get_template_directory_uri();?>/images/our_vision_left_pic.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tab_text_ser para_default">
                                                <h3>Our Mission</h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                                <ul class="list_for_type_of_visition">
                                                    <li><i class="fa fa-dot-circle-o"></i> Far far away, behind the word mountains, far from the countries</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> Vokalia and Consonantia. Far far away, behind the word mountains,</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> Separated they live in Bookmarksgrove right at the coast of the.</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> far from the countries Vokalia and Consonantia</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div><!--about_us_tab_area-->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- about_page_tab_section_area -->
	
   <?php get_footer();?>
   
</body>
</html>