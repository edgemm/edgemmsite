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

/* add/remove site-wide scripts and stylesheets */
// dequeue scripts/styles
function remove_styles() {
   // digiatl portfolio
   if( is_page_template( "page-digital-portfolio.php" ) ) {
      wp_dequeue_style( 'superfish' );
      wp_deregister_style( 'superfish' );
      wp_dequeue_style( 'slideshow' );
      wp_deregister_style( 'slideshow' );
      wp_dequeue_style( 'category-posts' );
      wp_deregister_style( 'category-posts' );
      wp_dequeue_style( 'boxes' );
      wp_deregister_style( 'boxes' );
   }   
}
add_action( 'wp_print_styles', 'remove_styles' );

function edgemm_scripts() {
   // generic scripts used across site
   wp_enqueue_script( 'edgemm-scripts', get_stylesheet_directory_uri() . '/js/edgemm-scripts.js', array(), '1.0.0', true );

   // digiatl portfolio
   if( is_page_template( "page-digital-portfolio.php" ) ) {
      // enqueue stylesheet
      wp_register_style( 'digital-portfolio', get_stylesheet_directory_uri() . '/css/digital-portfolio.css' );
      wp_enqueue_style( 'digital-portfolio' );
      wp_register_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '4.1.0', 'all' );
      wp_enqueue_style( 'fontawesome' );

      // enqueue scripts
      wp_enqueue_script( 'js-hammer', get_stylesheet_directory_uri() . '/js/hammer.min.js', array(), '1.1.2', true );
      wp_enqueue_script( 'js-screenfull', get_stylesheet_directory_uri() . '/js/screenfull.js', array(), '1.1.2', true );
      wp_enqueue_script( 'js-digital-portfolio', get_stylesheet_directory_uri() . '/js/digital-portfolio.js', array(), '1.0.0', true );
   }
}
add_action( 'wp_enqueue_scripts', 'edgemm_scripts' );


// detect mobile
function detect_mobile() {
   
   global $is_mobile;

   $useragent=$_SERVER['HTTP_USER_AGENT'];
   if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|android|ipad|playbook|silk|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
	   $is_mobile = true;
   } else {
	   $is_mobile = false;
   }
}
add_action( 'init', 'detect_mobile' );

// detect retina devices (currently only used for portfolio)
function detect_retina() {

   global $is_retina;
   $is_retina = isset( $_COOKIE["device_pixel_ratio"] ) AND $_COOKIE["device_pixel_ratio"] >= 2;

}
add_action( 'init', 'detect_retina' );

// Multiple Featured Images
require_once ('multiple_featured_images_smc.php');


if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'background-blur-smc', 1000, 1000 );

	// digital portfolio
	add_image_size( 'digital-portfolio', 1532, 1080 );
	add_image_size( 'digital-portfolio-retina', 3064, 2160 );
	add_image_size( 'digital-portfolio-thmb', 120, 85, true );
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
// Custom Post Types
/////////////////////////////////////////////////////////////

// Home Sliders
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

// Portfolio
add_action( 'init', 'register_digital_portfolio' );

function register_digital_portfolio() {

	$labels = array(
		'name'                => 'Portfolio Items',
		'singular_name'       => 'Portfolio Item',
		'menu_name'           => 'Portfolio',
		'name_admin_bar'      => 'Portfolio',
		'parent_item_colon'   => 'Portfolio Item:',
		'all_items'           => 'Portfolio Items',
		'add_new_item'        => 'Add New Portfolio Item',
		'add_new'             => 'Add New',
		'new_item'            => 'New Portfolio Item',
		'edit_item'           => 'Edit Portfolio Item',
		'update_item'         => 'Update Portfolio Item',
		'view_item'           => 'View Portfolio Item',
		'search_items'        => 'Search Portfolio Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'digital_portfolio',
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-book-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'digital_portfolio', $args );

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


///////////////////////////////////////////////////////////////////////////
// Sort portfolio items by sort order
///////////////////////////////////////////////////////////////////////////

// ADMIN COLUMN - HEADERS
add_filter('manage_edit-digital_portfolio_columns', 'add_new_portfolio_columns');
function add_new_portfolio_columns($portfolio_columns) {
	$new_columns['cb'] = '<input type="checkbox" />';
	$new_columns['title'] = _x('Sort Order', 'column name');
	$new_columns['digital_portfolio_order'] = __('Order');
	return $new_columns;
}

// ADMIN COLUMN - CONTENT
add_action('manage_digital_portfolio_posts_custom_column', 'manage_portfolio_columns', 10, 2);
function manage_portfolio_columns($column_name, $id) {
	global $post;
	switch ($column_name) {
		case 'digital_portfolio_order':
			echo get_post_meta( $post->ID , 'digital_portfolio_order' , true );
			break;
		default:
			break;
	} // end switch
}

// ADMIN COLUMN - SORTING - MAKE HEADERS SORTABLE
// https://gist.github.com/906872

add_filter("manage_edit-digital_portfolio_sortable_columns", 'concerts_sort');
function concerts_sort($columns) {
	$custom = array(
		'digital_portfolio_order' 	=> 'digital_portfolio_order'
	);
	return wp_parse_args($custom, $columns);
	/* or this way
		$columns['concertdate'] = 'concertdate';
		$columns['city'] = 'city';
		return $columns;
	*/
}

// ADMIN COLUMN - SORTING - ORDERBY
// http://scribu.net/wordpress/custom-sortable-columns.html#comment-4732
add_filter( 'request', 'digital_portfolio_order_column_orderby' );
function digital_portfolio_order_column_orderby( $vars ) {
	if ( isset( $vars['orderby'] ) && 'digital_portfolio_order' == $vars['orderby'] ) {
		$vars = array_merge( $vars, array(
			'meta_key' => 'digital_portfolio_order',
			//'orderby' => 'meta_value_num', // does not work
			'orderby' => 'meta_value_num'
			//'order' => 'asc' // don't use this; blocks toggle UI
		) );
	}
	return $vars;
}



?>