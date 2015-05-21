<?php /*
Template Name: About Edge
*/ ?>
<?php get_header(); ?>

		<?php if(!is_front_page()):?>
			<div id="pageHead">
				<h1><?php the_title(); ?></h1>
				<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
				<?php if ($page_description) : ?>
					<p><?php echo $page_description; ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>		
		<div class="smcsolution">		 
		<div id="content" class="clearfix full">
		<?php while (have_posts()) : the_post(); ?>			    
<div <?php post_class('clearfix'); ?>>						
				
<?php the_content(); ?>

            
<!-- Our Team -->                              

<div id="posts" class="full homeSection clearfix"><!--<h3><span>Our Team</span></h3>-->
<?php query_posts( array('order' => 'ASC','cat' => 36,'posts_per_page' => -1));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>

<!-- End Design -->

                
                
</div>				
		<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
        </div>


                                               
		
<?php get_footer(); ?>