	<?php
/* Template Name: Digital Portfolio */

get_header( 'digital-portfolio' );

global $is_retina;

?>

	<main role="main" class="content">
		<section class="slides-wrapper">
			 <div class="slides-container">
				<div class="slides" data-retina="<?php if( $is_retina ) { echo 'true'; } else { echo 'false'; } ?>">
	
				<?php

				include( locate_template( 'part-portfolio.php' ) );

				wp_reset_postdata();

				?>
	
				</div>
			 </div>

			<a class="btn-slidenav nav-prev" data-dir="prev" href="javascript:void(0);"></a>
			<a class="btn-slidenav nav-next" data-dir="next" href="javascript:void(0);"></a>
		</section>
	</main>

</div>
<!-- /wrapper -->

<div class="modal-container" data-modal="modal-share">
	<div class="modal-share modal-contents">
	    <?php echo do_shortcode( '[contact-form-7 id="2397" title="Online Portfolio Share"]' ); ?>
	    <i class="fa fa-times modal-close"></i>
	</div>
</div>

<div class="modal-container" data-modal="modal-content">
	<div class="modal-content modal-contents">
		<div class="modal-content-container">
			<div class="modal-content-slides">			
				<i class="fa fa-times modal-close"></i>
				<?php
				$i = 0;
				
				if ($portfolio_query->have_posts()) :
					while ( $portfolio_query->have_posts() ) :
					
						$portfolio_query->the_post();
				?>
				<div class="mcs-container">
					<a class="mcs-link" href="javascript:void(0);" data-index="<?php echo $i; ?>">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'digital-portfolio-thmb', array( 'class' => 'mcs-thmb' ) );
					}
					?>
					</a>
					<div class="mcs-title">
						<a class="mcs-link" href="javascript:void(0);" data-index="<?php echo $i; ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<?php
				$i++;
				endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer( 'digital-portfolio' ); ?>
