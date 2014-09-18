<?php

/*if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}*/

if (!is_admin()) add_action("wp_enqueue_scripts", "my_fitvids_enqueue", 11);
function my_fitvids_enqueue() {
   wp_deregister_script('fitvids');
   wp_register_script('fitvids', get_stylesheet_directory_uri().'/js/jquery.fitvids_smc.js', false, null);
   wp_enqueue_script('fitvids');
}

/* smc Track Youtube Videos */
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  
   wp_register_script('track-youtube', "/wp-content/themes/edge-child-theme/js/track-youtube.js", false, null);
   wp_enqueue_script('track-youtube');
}
/* end smc Track Youtube Videos */

// Multiple Featured Images
require_once ('multiple_featured_images_smc.php');


if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'background-blur-smc', 1000, 1000 );

}

function is_desc_cat($cats, $_post = null) {
  foreach ((array)$cats as $cat) {
    if (in_category($cat, $_post)) {
      return true;
    } else {
      if (!is_int($cat)) $cat = get_cat_ID($cat);
      $descendants = get_term_children($cat, 'category');
      if ($descendants && in_category($descendants, $_post)) return true;
    }
  }

return false;
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//////////////////////////////////////////////////////////////
// Home Custom Excerpt modified SMC
/////////////////////////////////////////////////////////////

// Variable & intelligent excerpt length.
function print_excerpt_smc($title) { // Max excerpt length. Length is set in characters
	global $post;

	$rem_len = ""; //clear variable
	$title_len = strlen($title); //get length of title
	$excerpt_line=25;
	if($title_len <= 30){
    	$rem_len=$excerpt_line*5; //calc space remaining for excerpt
	}elseif($title_len <= 34){
    	$rem_len=$excerpt_line*5;
	}elseif($title_len <= 51){
    	$rem_len=$excerpt_line*4;
	}elseif($title_len <= 68){
    	$rem_len=$excerpt_line*4;
	}elseif($title_len <= 85){
    	$rem_len=$excerpt_line*4;
	}

	$text = $post->post_excerpt;
	if ( '' == $text ) {
    	$text = get_the_content('');
    	$text = apply_filters('the_content', $text);
    	$text = str_replace(']]>', ']]>', $text);
	}
	$text = strip_shortcodes($text); // optional, recommended
	$text = strip_tags($text,'<p>'); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags

	$text = substr($text,0,$rem_len);
	$excerpt = reverse_strrchr($text, ' ', 1) . "&#0133;";
	if( $excerpt ) {
    	echo apply_filters('the_excerpt',$excerpt);
	} else {
    	echo apply_filters('the_excerpt',$text);
	}
}

update_option('image_default_link_type','none');


//////////////////////////////////////////////////////////////
// Theme Footer SMC
/////////////////////////////////////////////////////////////

add_action( 'after_setup_theme', 'remove_parent_theme_features', 10 );
 
function remove_parent_theme_features() {
    remove_action('wp_footer','ttrust_footer');
}

add_action('wp_footer','ttrust_footer_smc');

function ttrust_footer_smc() {
	wp_reset_query();
	if(is_front_page()){
		if (of_get_option('ttrust_bkg_slideshow_enabled') && !is_mobile()) {
			include('background_home_smc.php');
		}
		if (of_get_option('ttrust_slideshow_enabled')) {
			include(TEMPLATEPATH . '/js/slideshow.php');
		}

		global $wp_query;
		global $post;
		$is_tiled_bkg = get_meta_box_vlaue("_ttrust_background_tile_value");
		if ( !$is_tiled_bkg && has_single_custom_background() && !is_mobile() ) {
			include(TEMPLATEPATH . '/js/background_single.php');
		}

	}elseif ( is_singular() ) {
		global $wp_query;
		global $post;
		$is_tiled_bkg = get_meta_box_vlaue("_ttrust_background_tile_value");
		if ( !$is_tiled_bkg && has_single_custom_background() && !is_mobile() ) {
			include(TEMPLATEPATH . '/js/background_single.php');
		}
		if ( false !== strpos($post->post_content, '[slideshow') ) {
			include(TEMPLATEPATH . '/js/slideshow.php');
		}
	}
}

function remove_private_prefix($title) {
$title = str_replace(
'Protected:',
'',
$title);
return $title;
}
add_filter('the_title','remove_private_prefix');


?>