<?php /*
Template Name: Our Services
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

<ul id="filterNav" class="clearfix">
<li><a href="#" id="creative-servicesbutton">Creative</a></li>
<li><a href="#" id="designbutton">Design</a></li>
<li><a href="#" id="online-servicesbutton">Digital</a></li>
<li><a href="#" id="media-buyingbutton">Media Buying</a></li>
<li><a href="#" id="public-relationsbutton">Public Relations</a></li>
<li><a href="#" id="social-mediabutton">Social Media</a></li>

		</ul>

<!-- Media buying -->                              
<div id="media-buying">
<div id="posts" class="full homeSection clearfix"><h3><span>Media Buying</span></h3>
<?php query_posts( array('order' => 'ASC','cat' => 170));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt_smc(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
<!-- End -->

<!-- Creative Services -->
<div id="creative-services">
<div id="posts" class="full homeSection clearfix"><h3><span>Creative</span></h3>
<?php query_posts( array('order' => 'ASC','cat' => 152));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt_smc(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
<!-- End -->

<!-- Design -->
<div id="design">
<div id="posts" class="full homeSection clearfix"><h3><span>Design</span></h3>
<?php query_posts( array('order' => 'ASC','cat' => 23));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt_smc(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
<!-- End -->

<!-- Online Services -->
<div id="online-services">
<div id="posts" class="full homeSection clearfix"><h3><span>Digital</span></h3>
<?php query_posts( array('order' => 'ASC','cat' => 154));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt_smc(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
<!-- End -->

<!-- Social Media -->
<div id="social-media">
<div id="posts" class="full homeSection clearfix"><h3><span>Social Media</span></h3>
<?php query_posts( array('order' => 'ASC','cat' => 171));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt_smc(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
<!-- End -->

<!-- Public Relations -->
<div id="public-relations">
<div id="posts" class="full homeSection clearfix"><h3><span>Public Relations</span></h3>
<?php query_posts( array('order' => 'ASC','cat' => 173));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt_smc(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
<!-- End -->                                           

</div>				
		<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
        </div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	  
function goToByScroll(id){
        $('html,body').animate({scrollTop: $(id).offset().top},'slow');
}

$('#media-buyingbutton').click(function() { goToByScroll('#media-buying'); theend(); });
$('#creative-servicesbutton').click(function() { goToByScroll('#creative-services'); theend(); });
$('#designbutton').click(function() { goToByScroll('#design'); theend(); });
$('#online-servicesbutton').click(function() { goToByScroll('#online-services'); theend(); });
$('#social-mediabutton').click(function() { goToByScroll('#social-media'); theend(); });
$('#public-relationsbutton').click(function() { goToByScroll('#public-relations'); theend(); });

});
</script>
                                               
		
<?php get_footer(); ?>