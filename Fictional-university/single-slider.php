<?php

get_header();



while(have_posts()){
	the_post();
		pagebanner();
	?>
	

  <div class="container container--narrow page-section">		
	<div class="generic-content">
      <p><?php the_content();?></p>
    </div>
   </div> 
			
	



	<?php }


get_footer();


?>