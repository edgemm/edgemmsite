<script type="text/javascript">
	jQuery(document).ready(function(){
		
		jQuery.supersized({
		
			//Functionality
			slideshow               :   1,		//Slideshow on/off
			autoplay		:   0,		//Slideshow starts playing automatically
			start_slide             :   1,		//Start slide (0 is random)
			pause_hover             :   0,		//Pause slideshow on hover
			keyboard_nav            :   0,		//Keyboard navigation on/off
			performance		:   1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
			fit_portrait         	:   1,		//Portrait images will not exceed browser height
			fit_landscape		:   0,		//Landscape images will not exceed browser width
			navigation              :   0,		//Slideshow controls on/off
			thumbnail_navigation    :   0,		//Thumbnail navigation
			slide_counter           :   0,		//Display slide numbers
			slide_captions          :   0,		//Slide caption (Pull from "title" in slides array)
			slides 			:   [		//Slideshow Images
			
			<?php
			// set arguments from slideshow query
			global $edgemm_slides_args;

			$query_bg = new WP_Query( $edgemm_slides_args );
			
			$c = 0;
			$post_count = $query_bg->post_count;
			
			while ( $query_bg->have_posts() ) : $query_bg->the_post();

				$c++;

			?>
			{image : '<?php echo MultiPostThumbnails2::get_the_post_thumbnail_url2("home_slider", "background_image", $post->ID, "ttrust_background_image_full"); ?>'}<?php if($c < $post_count) echo',';?>  
			<?php
			
			endwhile;
			
			wp_reset_postdata();
			
			?>
						   ]
		});
		
    });    
</script>