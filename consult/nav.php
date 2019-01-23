
<?php 

$menu_select = cs_get_option('menu_selection1');

if($menu_select === 'header_menu_1'){ ?>
	
	<nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">
				
				<?php
				
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'container' 	  => 'div',
					'container_class' => 'navbar-collapse collapse align-left',
					'menu_class'	  => 'nav navbar-nav',
					'depth' 		  =>  5,
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				
				
				?>
					
                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
								<a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri();?>/images/logo_consult.png"></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
	
	
<?php }

else{ ?>
	
	<nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">
				
				<div class="navbar-other">
				
					<div class="align-left text-left">
						<div class="navbar-brand">
							<a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri();?>/images/logo_consult.png"></a>
						</div>
					</div>
					
               </div>
			   
				<div class="navbar-collapse collapse align-right">
					<?php
				
				wp_nav_menu(array(
					'theme_location'  => 'primary_2',
					'container' 	  => 'div',
					'container_class' => 'navbar-collapse collapse align-left',
					'menu_class'	  => 'nav navbar-nav',
					'depth' 		  =>  5,
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				
				
				?>
				</div>

                </div>
            </div>
        </nav>
	
<?php }

?>








		
		
        