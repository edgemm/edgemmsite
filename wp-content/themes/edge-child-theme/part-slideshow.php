<?php
$args = array (
	'post_type'		=> 'home_slider',
	'posts_per_page'	=> 4,
	'meta_key'		=> 'home_slide_order',
	'orderby'		=> 'meta_value_num',
	'order'			=> 'ASC'
);

// set args for use in background image query
global $edgemm_slides_args;
$edgemm_slides_args = $args;

$query_slides = new WP_Query( $args );

// store slide post IDs
$slides = array();

while ( $query_slides->have_posts() ) : $query_slides->the_post();
	if( !get_field( 'home_archive_slide' ) && has_post_thumbnail() ) :
		array_push( $slides, get_the_ID() );
	endif;
endwhile;

$count = sizeof( $slides );

if ( !empty( $slides ) ) :

$cols = "tabs-" . $count . "col";

?>
<div class="slideshow">
	<div class="flexslider">
		<ul class="slides">
		<?php
		// add each slide image
		foreach( $slides as $i => $s ) :
		?>
			<li id="slide<?php echo $i; ?>">
				<?php
				$img_attr = array(
					'class' => "slideshow_img"
				);
				echo get_the_post_thumbnail( $s, 'ttrust_slideshow_image_full', $img_attr );
				?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	<div class="slideText">
		<ul class="slideText-titles clearfix <?php echo $cols; ?>">
		<?php foreach( $slides as $i => $s ) : ?>
			<li class="slideText-tab" data-slideTab="<?php echo $i; ?>">
				<a class="slideText-title" href="javascript:void(0);"><?php echo get_the_title( $s ); ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
		<div class="slideText-container">
		<?php foreach( $slides as $i => $s ) : ?>
			<div class="slideText-content" data-slideText="<?php echo $i; ?>"><?php echo apply_filters( 'the_content', get_post_field( 'post_content', $s ) ); ?></div>
		<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php wp_reset_query();?>