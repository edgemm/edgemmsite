<?php /*
Template Name: Next Step Solution
*/ ?>
<?php get_header(); ?>

		<?php if(!is_front_page()):?>
			<div id="pageHead">
				<h1><?php echo $_GET["yourname"]; ?>, <?php the_title(); ?></h1>
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
                       
<!-- Register Yes No's and default message -->                
<?php $mylogo = $_GET["mylogo"]; $mycollateral = $_GET["mycollateral"]; $photovideo = $_GET["photovideo"]; ?>
<?php $excitedwebsite = $_GET["excitedwebsite"]; $websiteleads = $_GET["websiteleads"]; $websiteeasy = $_GET["websiteeasy"]; ?>
<?php $websiteterms = $_GET["websiteterms"]; $websitetrack = $_GET["websitetrack"]; $websiteaction = $_GET["websiteaction"]; ?>
<?php $engageonline = $_GET["engageonline"]; $postonline = $_GET["postonline"]; $advertiseonline = $_GET["advertiseonline"]; ?>
<?php $advertisingbudget = $_GET["advertisingbudget"]; $advertisingworking = $_GET["advertisingworking"]; $advertisingdeal = $_GET["advertisingdeal"]; ?>
<!-- End Register Yes No's -->

<!-- All YES's -->                              
	<?php if ($mylogo == 'Yes' && $mycollateral == 'Yes' && $photovideo == 'Yes' && $excitedwebsite == 'Yes' && $websiteleads == 'Yes' && $websiteeasy == 'Yes' && $websiteterms == 'Yes' && $websitetrack == 'Yes' && $websiteaction == 'Yes' && $engageonline == 'Yes' && $postonline == 'Yes' && $advertiseonline == 'Yes' && $advertisingbudget == 'Yes' && $advertisingworking == 'Yes' && $advertisingdeal == 'Yes') {?>

<p>Ok smarty pants. Thanks for being awesome!</p>

</div>
<?php } elseif ($mylogo == 'undefined' && $mycollateral == 'undefined' && $photovideo == 'undefined' && $excitedwebsite == 'undefined' && $websiteleads == 'undefined' && $websiteeasy == 'undefined' && $websiteterms == 'undefined' && $websitetrack == 'undefined' && $websiteaction == 'undefined' && $engageonline == 'undefined' && $postonline == 'undefined' && $advertiseonline == 'undefined' && $advertisingbudget == 'undefined' && $advertisingworking == 'undefined' && $advertisingdeal == 'undefined' || $mylogo == '' && $mycollateral == '' && $photovideo == '' && $excitedwebsite == '' && $websiteleads == '' && $websiteeasy == '' && $websiteterms == '' && $websitetrack == '' && $websiteaction == '' && $engageonline == '' && $postonline == '' && $advertiseonline == '' && $advertisingbudget == '' && $advertisingworking == '' && $advertisingdeal == '') {?>

<!-- skip default message -->
<p>Thanks We will be in touch soon!</p>

</div>
<?php } else { ?>
    
<!-- default message -->                

<?php } ?>
<!-- End All YES's -->               

<!-- Branding -->                              
	<?php if ($mylogo == 'No' || $mycollateral == 'No' || $photovideo == 'No') {?>
<div class="nextstep3">
		<div id="posts" class="full homeSection clearfix"><h3><span>Branding Solutions</span></h3>		
<?php
	if ($mylogo == 'No') {$mylogopost = '134';} else {$mylogopost = '0';}
	if ($mycollateral == 'No') {$mycollateralpost = '135';} else {$mycollateralpost = '0';}
	if ($photovideo == 'No') {$photovideopost = '136';} else {$photovideopost = '0';}
query_posts( array('order' => 'ASC','post__in' => array(148,$mylogopost,$mycollateralpost,$photovideopost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
	<?php } ?>
<!-- End Branding -->

<!-- Website -->
<?php if ($excitedwebsite == 'No' || $websiteleads == 'No' || $websiteeasy == 'No') {?>
<div class="nextstep3">
		<div id="posts" class="full homeSection clearfix"><h3><span>Website Solutions</span></h3>		
<?php
	if ($excitedwebsite == 'No') {$excitedwebsitepost = '137';} else {$excitedwebsitepost = '0';}
	if ($websiteleads == 'No') {$websiteleadspost = '138';} else {$websiteleadspost = '0';}
	if ($websiteeasy == 'No') {$websiteeasypost = '139';} else {$websiteeasypost = '0';}
query_posts( array('order' => 'ASC','post__in' => array(162,$excitedwebsitepost,$websiteleadspost,$websiteeasypost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
	<?php } ?>
<!-- End Website -->

<!-- SEO -->
<?php if ($websiteterms == 'No' || $websitetrack == 'No' || $websiteaction == 'No') {?>
<div class="nextstep3">
		<div id="posts" class="full homeSection clearfix"><h3><span>SEO Solutions</span></h3>		
<?php
	if ($websiteterms == 'No') {$websitetermspost = '165';} else {$websitetermspost = '0';}
	if ($websitetrack == 'No') {$websitetrackpost = '166';} else {$websitetrackpost = '0';}
	if ($websiteaction == 'No') {$websiteactionpost = '167';} else {$websiteactionpost = '0';}
query_posts( array('order' => 'ASC','post__in' => array(164,$websitetermspost,$websitetrackpost,$websiteactionpost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
	<?php } ?>
<!-- End SEO -->

<!-- Digital -->
<?php if ($engageonline == 'No' || $postonline == 'No' || $advertiseonline == 'No') {?>
<div class="nextstep3">
		<div id="posts" class="full homeSection clearfix"><h3><span>Digital Solutions</span></h3>		
<?php
	if ($engageonline == 'No') {$engageonlinepost = '168';} else {$engageonlinepost = '0';}
	if ($postonline == 'No') {$postonlinepost = '169';} else {$postonlinepost = '0';}
	if ($advertiseonline == 'No') {$advertiseonlinepost = '171';} else {$advertiseonlinepost = '0';}
query_posts( array('order' => 'ASC','post__in' => array(172,$engageonlinepost,$postonlinepost,$advertiseonlinepost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
	<?php } ?>
<!-- End Digital -->

<!-- Marketing -->
<?php if ($advertisingbudget == 'No' || $advertisingworking == 'No' || $advertisingdeal == 'No') {?>
<div class="nextstep3">
		<div id="posts" class="full homeSection clearfix"><h3><span>Marketing Solutions</span></h3>		
<?php
	if ($advertisingbudget == 'No') {$advertisingbudgetpost = '173';} else {$advertisingbudgetpost = '0';}
	if ($advertisingworking == 'No') {$advertisingworkingpost = '174';} else {$advertisingworkingpost = '0';}
	if ($advertisingdeal == 'No') {$advertisingdealpost = '175';} else {$advertisingdealpost = '0';}
query_posts( array('order' => 'ASC','post__in' => array(176,$advertisingbudgetpost,$advertisingworkingpost,$advertisingdealpost)));?>
<div class="homePosts"><?php while (have_posts()) : the_post(); ?><div <?php post_class('small'); ?>>	
<a class="thumb" href="<?php the_permalink() ?>" rel="bookmark" >
<?php the_post_thumbnail("ttrust_one_fourth_short", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?></a>			
<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
<div class="meta clearfix"></div><?php print_excerpt(get_the_title()); ?><?php //the_excerpt(); ?><?php more_link(); ?></div>
<?php endwhile; ?><?php wp_reset_query(); ?>
</div>
</div>
</div>
	<?php } ?>
<!-- End Marketing --> 

<!-- Restart and Contunue buttons -->


<?php if ($advertisingbudget == 'Yes' || $advertisingbudget == 'No') {} else {?>

<a class="button" href="/continue/">Ask Me More</a>                                                   

<?php } ?>

<a class="button" href="/next-step-tool/">Restart From Step One</a> 

<!-- End Restart and Contunue buttons --> 

                
</div>				
		<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
        </div>
        
<?php $excitedwebsite = $_GET["excitedwebsite"]; ?>
<?php $websiteterms = $_GET["websiteterms"]; ?>
<?php $engageonline = $_GET["engageonline"]; ?>
<?php $advertisingbudget = $_GET["advertisingbudget"]; ?>        

<!-- Load Cookie - url to this page to save solution or messages -->                                                         
<script type="text/javascript">
jQuery(document).ready(function($) {
var pathname = window.location.href;	
$.cookie('mynextstep', pathname, {expires : 360, path : '/' });

$.cookie('excitedwebsite', '<?php echo $excitedwebsite; ?>', {expires : 360, path : '/' });

$.cookie('websiteterms', '<?php echo $websiteterms; ?>', {expires : 360, path : '/' });

$.cookie('engageonline', '<?php echo $engageonline; ?>', {expires : 360, path : '/' });

$.cookie('advertisingbudget', '<?php echo $advertisingbudget; ?>', {expires : 360, path : '/' });

//doc ready end
})(jQuery)


function stepReset() {

(function ($) { 
   		
	window.location.href = "/next-step-tool/";

})(jQuery)

} 

</script>            
<!-- End Load Cookie -->                                                        
		
<?php get_footer(); ?>