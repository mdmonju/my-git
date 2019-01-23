<?php get_header();?>
	<!-- content -->
	
	<section id="content"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-7"> 
					<div class="presenter_profile profile_common"> 
						<div class="common_profile_image"> 
							<img src="<?php echo wp_get_attachment_image_src(cs_get_option('presenter-profile-image'),'full')[0]; ?>">
						</div>
						<div class="common_profile_text"> 
							<div class="cpt_heading"> 
								<h2 style="color:<?php echo cs_get_option('presenter-profile-color');?>"><?php echo cs_get_option('presenter-profile-heading');?></h2>
							</div>
							<div class="cpt_content"> 
							<?php

							$grp_sec_1=cs_get_option('presenter-profile-group');
							if(is_array($grp_sec_1)){
							foreach($grp_sec_1 as $grp_value_1){ ?>
							
								<p><?php echo esc_html ($grp_value_1['presenter-profile-field'])?></p>
							
							<?php }
							}

							?>
							</div>
						</div>
					</div>
					<div class="moderator_designer_profile profile_common"> 
						<div class="common_profile_image"> 
							<img src="<?php echo wp_get_attachment_image_src(cs_get_option('moderator-designer-image'),'full')[0]; ?>">
						</div>
						<div class="common_profile_text"> 
							<div class="cpt_heading"> 
								<h2 style="color:<?php echo cs_get_option('moderator-designer-color');?>"><?php echo cs_get_option('moderator-designer-heading');?></h2>
							</div>
							<div class="cpt_content"> 
							<?php

							$grp_sec_2=cs_get_option('moderator-designer-group');
							if(is_array($grp_sec_2)){
							foreach($grp_sec_2 as $grp_value_2){ ?>
							
								<p><?php echo esc_html ($grp_value_2['moderator-designer-field'])?></p>
							
							<?php }
							}

							?>
							</div>
						</div>
					</div>
					<div class="moderator_profile profile_common"> 
						<div class="common_profile_image"> 
							<img src="<?php echo wp_get_attachment_image_src(cs_get_option('moderator-image'),'full')[0]; ?>">
						</div>
						<div class="common_profile_text"> 
							<div class="cpt_heading"> 
								<h2 style="color:<?php echo cs_get_option('moderator-color');?>"><?php echo cs_get_option('moderator-heading');?></h2>
							</div>
							<div class="cpt_content"> 
							<?php

							$grp_sec_3=cs_get_option('moderator-group');
							if(is_array($grp_sec_3)){
							foreach($grp_sec_3 as $grp_value_3){ ?>
							
								<p><?php echo esc_html ($grp_value_3['moderator-field'])?></p>
							
							<?php }
							}

							?>
							</div>
						</div>
					</div>
				</div>
				
		<!-- sidebar -->		
				<?php get_sidebar();?>
			</div>
		</div>
	</section>
	
<?php get_footer();?>