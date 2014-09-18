<?php /*
Template Name: C Forms
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
				 
		<div id="content" class="clearfix full">
		<?php while (have_posts()) : the_post(); ?>			    
			<div <?php post_class('clearfix'); ?>>						
				<?php the_content(); ?>
                
                
<script>

$.noConflict();
  jQuery(document).ready(function($) {
	  
//Hide the field initially
	$("#q1a").hide();
//Hide the field initially	
	$("#q1b").hide();
//Hide the field initially	
	$("#q1c").hide();
//Hide the field initially	
	$("#q1d").hide();
//Hide the field initially
	$("#q1a2").hide();
//Hide the field initially	
	$("#q1b2").hide();
//Hide the field initially	
	$("#q1c2").hide();
//Hide the field initially	
	$("#q1d2").hide();
	
$('#awesome input:checkbox').change(function() {

	//Show the text field only when the third option is chosen - this doesn't
	$('#awesome').click(function() {
		if ($("#awesome input:checkbox:checked").val() == "No") {
			$("#q1a").show(500);
			$("#q1a2").hide(500);	
			$("#q1b2").hide(500);	
			$("#q1c2").hide(500);	
			$("#q1d2").hide(500);
		}
		else {
			$("#q1a").hide(500);
			
			if ($("#q1 input:radio[name=q1]:checked").val() == "1" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1a2").show(500);
			}
			if ($("#q1 input:radio[name=q1]:checked").val() == "2" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1b2").show(500);
			}	
			if ($("#q1 input:radio[name=q1]:checked").val() == "3" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1c2").show(500);
			}	
			if ($("#q1 input:radio[name=q1]:checked").val() == "4" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1d2").show(500);
			}	
			
			}
	});
});

$('#q1 input:radio[name=q1]').change(function() {

	//Show the text field only when the third option is chosen - this doesn't
	$('#q1').change(function() {
		if ($("#q1 input:radio[name=q1]:checked").val() == "1" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1a2").show(500);
		}
		else {
			$("#q1a2").hide(500);
		}
	});

	//Show the text field only when the third option is chosen - this doesn't
	$('#q1').change(function() {
		if ($("#q1 input:radio[name=q1]:checked").val() == "2" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1b2").show(500);
		}
		else {
			$("#q1b2").hide(500);
		}
	});

	//Show the text field only when the third option is chosen - this doesn't
	$('#q1').change(function() {
		if ($("#q1 input:radio[name=q1]:checked").val() == "3" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1c2").show(500);
		}
		else {
			$("#q1c2").hide(500);
		}
	});
	
	//Show the text field only when the third option is chosen - this doesn't
	$('#q1').change(function() {
		if ($("#q1 input:radio[name=q1]:checked").val() == "4" && $("#awesome input:checkbox:checked").val() == "Yes") {
			$("#q1d2").show(500);
		}
		else {
			$("#q1d2").hide(500);
		}
	});
	
});

$("#hidr").click(function () {
  $("#changed").hide("fast", function () {
    // use callee so don't have to name the function
    $(this).prev().hide("fast", arguments.callee);
  });
});
$("#showr").click(function () {
  $("#changed").show(500);
});

	
});
	
</script>                
                				
			</div>				
			<?php comments_template('', true); ?>			
		<?php endwhile; ?>					    	
		</div>
		
<?php get_footer(); ?>