<?php

$portfolio_args = array(
		'post_type'		=> 'digital_portfolio',
		'orderby'		=> 'meta_value_num',
		'meta_key'		=> 'digital_portfolio_order',
		'order' 		=> 'ASC',
		'posts_per_page'	=> -1
	);

	$portfolio_query = new WP_Query( $portfolio_args );

	$i = 1;
	
	if ($portfolio_query->have_posts()) :
		//while ( $portfolio_query->have_posts() && $i < 5 ) :
		while ( $portfolio_query->have_posts() ) :

			$portfolio_query->the_post();

	?>
					<div class="slide">
					<?php
					// use retina photos if retina display
					//$portfolio_thumbnail_size = ( $is_retina ) ? "digital-portfolio-retina" : "digital-portfolio";
					$portfolio_thumbnail_size = "digital-portfolio";

					$portfolio_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $portfolio_thumbnail_size );
					$portfolio_thumbnail = $portfolio_thumbnail[0];

					$portfolio_thumbnail_src = ( $i > 10 ) ? "" : $portfolio_thumbnail;

					if ( has_post_thumbnail() ) {
						// the_post_thumbnail( $portfolio_thumbnail_size, array( 'class' => 'slide-img' ) );
						echo '<img class="slide-img wp-post-image" src="' . $portfolio_thumbnail_src . '" alt="' . get_the_title() . '" width="1532" height="1080" data-imgSrc="' . $portfolio_thumbnail . '">';
					}
					?>
					</div> <!-- end .slide -->

	<?php
			$i++;

	endwhile;
	endif;

?>