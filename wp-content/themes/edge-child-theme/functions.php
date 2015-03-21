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
   wp_register_script('fitvids', get_stylesheet_directory_uri().'/js/jquery.fitvids.js', false, null);
   wp_enqueue_script('fitvids');
}

/* smc Track Youtube Videos */
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  
   wp_register_script('track-youtube', "/wp-content/themes/edge-child-theme/js/track-youtube.js", false, null);
   wp_enqueue_script('track-youtube');
}
/* end smc Track Youtube Videos */

/* add site-wide scripts and stylesheets */
function edgemm_scripts() {
	// generic scripts used across site
	wp_enqueue_script( 'edgemm-scripts', get_stylesheet_directory_uri() . '/js/edgemm-scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'edgemm_scripts' );

// Multiple Featured Images
require_once ('multiple_featured_images_smc.php');


if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'background-blur-smc', 1000, 1000 );
}

// add MultiPostThumbnails to Home Sliders
if (class_exists('MultiPostThumbnails2')) {
	new MultiPostThumbnails2(array(
		'label' => 'Background Image',
		'id' => 'background_image',
		'post_type' => 'home_slider'
		)
	);
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

add_action('wp_footer','edgemm_footer');

function edgemm_footer() {
	wp_reset_query();
	if(is_front_page()){
		if (of_get_option('ttrust_bkg_slideshow_enabled') && !is_mobile()) {
			include(get_stylesheet_directory() . '/js/background_home.php');
		}
		if (of_get_option('ttrust_slideshow_enabled')) {
			include(get_stylesheet_directory() . '/js/slideshow.php');
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
			include(get_stylesheet_directory() . '/js/slideshow.php');
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


//////////////////////////////////////////////////////////////
// Post Type - Home Sliders
/////////////////////////////////////////////////////////////
add_action( 'init', 'register_home_slider' );

function register_home_slider() {

    $labels = array( 
        'name' => _x( 'Home Sliders', 'home_slider' ),
        'singular_name' => _x( 'Home Slider', 'home_slider' ),
        'add_new' => _x( 'Add New Home Slider', 'home_slider' ),
        'add_new_item' => _x( 'Add New Home Slider', 'home_slider' ),
        'edit_item' => _x( 'Edit Home Slider', 'home_slider' ),
        'new_item' => _x( 'New Home Slider', 'home_slider' ),
        'view_item' => _x( 'View Home Slider', 'home_slider' ),
        'search_items' => _x( 'Search Home Sliders', 'home_slider' ),
        'not_found' => _x( 'No home sliders found', 'home_slider' ),
        'not_found_in_trash' => _x( 'No home sliders found in Trash', 'home_slider' ),
        'parent_item_colon' => _x( 'Parent Home Slider:', 'home_slider' ),
        'menu_name' => _x( 'Home Sliders', 'home_slider' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'Slider Order' ),
        'public' => true,
        'show_ui' => true,        
        'menu_position' => 100,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'home_slider', $args );
}
///////////////////////////////////////////////////////////////////////////
// [htmlvideo video="video-url" poster="poster-url" image="image-url"] smc
///////////////////////////////////////////////////////////////////////////
function htmlvideosmc( $atts ) {
    $a = shortcode_atts( array(
        'video' => '',
        'poster' => '',
		'image' => '',
		'loop' => 'false',
		'autoplay' => 'false',
    ), $atts );
	
if ($a['loop'] == "true") {$loop = "loop";} else {$loop == "";}
if ($a['autoplay'] == "true") {$autoplay = "autoplay";} else {$autoplay == "";}


    return '<div class="videoContainer"><div class="fluid-width-video-wrapper"><video poster="'.$a['poster'].'" '.$autoplay.' '.$loop.' width="100%" height="100%"><source src="'.$a['video'].'"/><img src="'.$a['image'].'" alt="rh-video-loop" width="100%" height="100%"/></video></div><p></p></div>';
}
add_shortcode( 'htmlvideo', 'htmlvideosmc' );

?>