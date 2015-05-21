	</div>	
	<div id="footer">
		<div class="inside">		
		<div class="main clearfix">
		<?php	
		if(is_front_page() && is_active_sidebar('footer_home')) : dynamic_sidebar('footer_home'); 			
		elseif(is_archive() && is_active_sidebar('footer_posts')) : dynamic_sidebar('footer_posts');
		elseif(is_single() && is_active_sidebar('footer_posts')) : dynamic_sidebar('footer_posts');
		elseif(is_home() && is_active_sidebar('footer_posts')) : dynamic_sidebar('footer_posts');
		elseif(is_page() && is_active_sidebar('footer_pages')) : dynamic_sidebar('footer_pages');		
		else : ?>
	
			<?php if (!dynamic_sidebar('footer_default')); ?>						
			
		<?php endif; ?>				
		</div><!-- end footer main -->							
			
		<div class="secondary clearfix">	
			<?php $footer_left = of_get_option('ttrust_footer_left'); ?>
			<?php $footer_right = of_get_option('ttrust_footer_right'); ?>
			<div class="right">
				<p class="footer-contact">
					<a class="footer-contact-info" href="tel:503.828.0849" onClick="_gaq.push(['_trackEvent', 'Contact', 'Click', 'Call']);">
						<span class="footer-contact-heading">Call:</span> 
						503.828.0849
					</a>
				</p>
				<p class="footer-contact">
					<a class="footer-contact-info" href="mailto:hello@edgemm.com" target="_blank"  onClick="_gaq.push(['_trackEvent', 'Contact', 'Click', 'Email']);">
						<span class="footer-contact-heading">Email:</span> 
						hello@edgemm.com
					</a>
				</p>
			</div> 
			<div class="left">
				<p class="copyright"><?php if($footer_left){echo($footer_left);} else{ ?>&copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>"><strong><?php bloginfo('name'); ?></strong></a> All Rights Reserved.<?php }; ?></p>
			</div>             
		</div><!-- end footer secondary-->		
		</div>		
	</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>

<!-- Change URL of Custom Solutions Button -->                                                         
<script type="text/javascript">
jQuery(document).ready(function($) {
var mynextstepvalue = $.cookie("mynextstep");
if ( mynextstepvalue == null ) { $("#mynextstep").attr("href", /next-step-tool/) } else { $("#mynextstep").attr("href", mynextstepvalue) }
//doc ready end
});
</script>
<!-- End Change URL of Custom Solutions Button -->
       
</body>
</html>