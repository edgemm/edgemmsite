<?php /*
Template Name: Home
*/ ?>

<?php get_header(); ?>
<div id="content" class="full">

<?php $call_to_action_text = of_get_option('ttrust_cta_text'); ?>
<?php if($call_to_action_text) : ?>	
<div id="callToAction" class="full homeSection clearfix">
	<h3>
		<span>Find Your Edge</span>
	</h3>
	<?php echo do_shortcode( '[contact-form-7 id="2132" title="Call to Action - Home"]' ); ?>
</div>
<?php endif; ?>

<?php $home_project_count = intval(of_get_option('ttrust_home_project_count')); ?>
<?php if($home_project_count > 0) : ?>	
<div id="projects" class="full homeSection clearfix">			
	<h3><span><?php echo of_get_option('ttrust_recent_projects_title'); ?></span></h3>		
	<?php
	query_posts( array(
		'ignore_sticky_posts' => 1,    			
    	'posts_per_page' => of_get_option('ttrust_home_project_count'),
    	'post_type' => array(				
		'project'					
		)
	));
	?>		
					
	<div class="thumbs masonry">			
		<?php  while (have_posts()) : the_post(); ?>			
			<?php get_template_part( 'part-project-thumb'); ?>
		<?php endwhile; ?>
		<?php wp_reset_query();	?>		
	</div>
</div>
<?php endif; ?>

<?php $home_post_count = intval(of_get_option('ttrust_home_post_count')); ?>
<?php if($home_post_count > 0) : ?>
<div id="posts" class="full homeSection clearfix">			
	<h3><span><?php echo of_get_option('ttrust_recent_posts_title'); ?></span></h3>		
	<?php
	query_posts( array(
		'cat'      => 65,
		'ignore_sticky_posts' => 1,    			
    	'posts_per_page' => $home_post_count,
    	'post_type' => array(				
		'post'					
		)
	));
	?>
	<div class="homePosts">
    <?php //global $more; $more = 0; ?>
	<?php while (have_posts()) : the_post(); ?>			    
		<div <?php post_class('small'); ?>>	
			<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" ><?php the_post_thumbnail("edgemm_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
			<div class="meta clearfix">					
				<span class="date">By <?php the_author(); ?> on <?php the_time( 'M j, Y' ); ?></span>				
			</div>
            <?php //the_content(__('Read More'));?>
			<?php print_excerpt_smc(get_the_title()); ?>
			<?php //the_excerpt(); ?>
			<?php more_link(); ?>		
		</div>
	<?php endwhile; ?>
	<?php wp_reset_query();	?>
	</div>
</div>
<?php endif; ?>

<?php $clients_content = of_get_option('ttrust_clients_content'); ?>
<?php if ($clients_content) :?>
<div id="clients" class="full homeSection clearfix">
	<h3><span><?php echo of_get_option('ttrust_clients_title'); ?></span></h3>
	<?php echo $clients_content; ?>
</div>
<?php endif; ?>

</div>

<?php get_footer(); ?>	