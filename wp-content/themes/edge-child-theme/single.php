<?php get_header(); ?>

	<div id="pageHead">
		<?php $blog_page_id = of_get_option('ttrust_blog_page'); ?>
		<?php $blog_page = get_page($blog_page_id); ?>
		<h1><?php echo $blog_page->post_title; ?></h1>
		<?php $page_description = get_post_meta($blog_page_id, "_ttrust_page_description_value", true); ?>
		<?php if ($page_description) : ?>
			<p><?php echo $page_description; ?></p>
		<?php endif; ?>
	</div>
	 
	<div id="content" class="threeFourth clearfix">
		<?php while (have_posts()) : the_post(); ?>
			    
		<div <?php post_class(); ?>>													
			
			<?php if(is_desc_cat(65) ) { ?>		
			<div class="meta clearfix">
				<?php

				$post_show_author = of_get_option('ttrust_post_show_author');
				$post_show_date = of_get_option('ttrust_post_show_date');
				$post_show_category = of_get_option('ttrust_post_show_category');
				$post_show_comments = of_get_option('ttrust_post_show_comments');

				if($post_show_author || $post_show_date || $post_show_category) _e('Posted ', 'themetrust');				
				if($post_show_author) :
					_e('by ', 'themetrust');
					the_author_posts_link();
				endif;
				if($post_show_date) :
					_e(' on ', 'themetrust');
					the_time( 'M j, Y' );
				endif;
				if($post_show_category) :
					_e(' in ', 'themetrust');
					the_category(', ');
				endif;
				if(($post_show_author || $post_show_date || $post_show_category) && $post_show_comments) echo " | ";
				
				if($post_show_comments) :
				?>
					<a href="<?php comments_link(); ?>"><?php comments_number(__('No Comments', 'themetrust'), __('One Comment', 'themetrust'), __('% Comments', 'themetrust')); ?></a>
				<?php endif; ?>
			</div>
			<?php } ?>
			<?php
			if(of_get_option('ttrust_post_show_featured_image')) :
				if(has_post_thumbnail()) :
					if(of_get_option('ttrust_post_featured_img_size')=="large") :
						if(get_field('show_featured_image')) {             	
							$show_featured_image = get_field('show_featured_image');

							if ($show_featured_image == "Yes") the_post_thumbnail('large', array('class' => 'postThumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().''));
						} else {
							the_post_thumbnail('large', array('class' => 'postThumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().''));
						}
					else:
						the_post_thumbnail('ttrust_post_thumb_small', array('class' => 'postThumb alignleft', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().''));
					endif;
				endif;
			endif;

			the_content();

			if( !in_category(35) ) :
				$call_to_action_text = of_get_option('ttrust_cta_text');

				if( is_desc_cat( 63 ) ) : // show Inside Edge signup form if on Inside Edge article
				?>
			<div id="callToAction" class="cta-inside-edge-signup clearfix">
				<p class="cta-desc">Sign-up for our newsletter to have great articles like this sent to your email every month.</p>
				<?php echo do_shortcode( '[contact-form-7 id="2211" title="Call to Action - Inside Edge Signup"]' ); ?>
			</div>
				<?php elseif( $call_to_action_text ) : ?>
			<div id="callToAction" class="clearfix">
				<p><?php echo $call_to_action_text; ?></p>
				<a href="<?php echo of_get_option('ttrust_cta_btn_link'); ?>" class="button"><?php echo of_get_option('ttrust_cta_btn_text'); ?></a>
			</div>
				<?php
				endif;
			endif;

			wp_link_pages( array( 'before' => '<div class="pagination clearfix">Pages: ', 'after' => '</div>' ) );
			?>
		</div>				
		<?php comments_template('', true); ?>

		<?php endwhile; ?>					    	
	</div>
	<?php
		if(in_category('35')){ ?><?php get_sidebar(next); ?><?php } else {?>	
	<?php get_sidebar(); } ?>					

<?php get_footer(); ?>
