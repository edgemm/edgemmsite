<?php /*
Template Name: Next Step Solution 2
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
		<div class="smcsolution smcwide">		 
		<div id="content" class="threeFourth clearfix">
			<?php while (have_posts()) : the_post(); ?>			    
			    <div <?php post_class('clearfix'); ?>>						
					<?php the_content(); ?>
                    
                    <!-- Register Yes No's -->                
<?php $mylogo = $_GET["mylogo"]; $mycollateral = $_GET["mycollateral"]; $photovideo = $_GET["photovideo"]; ?>
<?php $excitedwebsite = $_GET["excitedwebsite"]; $websiteleads = $_GET["websiteleads"]; $websiteeasy = $_GET["websiteeasy"]; ?>
<?php $websiteterms = $_GET["websiteterms"]; $websitetrack = $_GET["websitetrack"]; $websiteaction = $_GET["websiteaction"]; ?>
<?php $engageonline = $_GET["engageonline"]; $advertiseonline = $_GET["advertiseonline"]; $websiteaction = $_GET["websiteaction"]; ?>
<?php $advertisingbudget = $_GET["advertisingbudget"]; $advertisingworking = $_GET["advertisingworking"]; $advertisingdeal = $_GET["advertisingdeal"]; ?>
<!-- End Register Yes No's -->               
                             
<!-- Branding -->                              
	<?php if ($mylogo == 'No' || $mycollateral == 'No' || $photovideo == 'No') {?>
		<div id="posts" class="full homeSection clearfix"><h3><span>Branding</span></h3>		
<?php
	if ($mylogo == 'No') {$mylogopost = '134';} else {$mylogopost = '0';}
	if ($mycollateral == 'No') {$mycollateralpost = '135';} else {$mycollateralpost = '0';}
	if ($photovideo == 'No') {$photovideopost = '136';} else {$photovideopost = '0';}
query_posts( array('order' => 'ASC','post__in' => array($mylogopost,$mycollateralpost,$photovideopost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
	<?php } ?>
<!-- End Branding -->

<!-- Website -->                              
	<?php if ($excitedwebsite == 'No' || $websiteleads == 'No' || $websiteeasy == 'No') {?>
		<div id="posts" class="full homeSection clearfix"><h3><span>Website</span></h3>		
<?php
	if ($excitedwebsite == 'No') {$excitedwebsitepost = '137';} else {$excitedwebsitepost = '0';}
	if ($websiteleads == 'No') {$websiteleadspost = '138';} else {$websiteleadspost = '0';}
	if ($websiteeasy == 'No') {$websiteeasypost = '139';} else {$websiteeasypost = '0';}
query_posts( array('order' => 'ASC','post__in' => array($excitedwebsitepost,$websiteleadspost,$websiteeasypost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
	<?php } ?>
<!-- End Website -->   
                    
                    
                    				
				</div>				
				<?php comments_template('', true); ?>			
			<?php endwhile; ?>					    	
		</div>
        </div>
		
		<?php get_sidebar(); ?>
		
	
<?php get_footer(); ?>
