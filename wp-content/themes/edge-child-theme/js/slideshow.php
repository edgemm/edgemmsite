<?php $slideshow_delay = of_get_option('ttrust_slideshow_delay'); ?>
<?php $autoPlay = ($slideshow_delay != "0") ? 1 : 0; ?>
<?php $slideshow_effect = of_get_option('ttrust_slideshow_effect'); ?>
<?php $before_action = (is_front_page() && of_get_option('ttrust_bkg_slideshow_enabled')) ? "api.goTo(slider.currentSlide+1);" : ""?>
<script type="text/javascript">
//<![CDATA[

jQuery(window).load(function() {

function changeSlide( i ) {
	jQuery( ".slideText-tab, .slideText-content" ).removeClass( current );
	jQuery( ".slideText-tab[data-slidetab='" + i + "']" ).addClass( current );
	jQuery( ".slideText-content[data-slidetext='" + i + "']" ).addClass( current );
}

var current = "active"; // class for active slide/content

jQuery( ".flexslider" ).flexslider({
	slideshowSpeed: <?php echo $slideshow_delay . '000'; ?>,
	slideshow: <?php echo $autoPlay; ?>,
	animation: '<?php echo $slideshow_effect; ?>',
	animationLoop: true,
	controlNav: true,
	directionNav: true,
	pauseOnAction: true,
	pauseOnHover: false,
	useCSS: true,
	touch: true,
	video: false,
	start: function(){
		jQuery( ".slideText" ).fadeIn();
		jQuery( ".slideText-tab[data-slidetab='0']" ).addClass( current );
		jQuery( ".slideText-content[data-slidetext='0']" ).addClass( current );
	},
	before: function(slider){
		changeSlide( slider.animatingTo );
	},
	after: function(slider){
		<?php if(!is_mobile()) echo $before_action; ?>
	}
});



jQuery( '.slideText-title' ).click(function(e){
	var tabIndex = parseInt( jQuery( this ).parent( ".slideText-tab" ).attr( "data-slidetab" ) );
	jQuery( ".flexslider" ).flexslider( tabIndex );
});

});

//]]>
</script>