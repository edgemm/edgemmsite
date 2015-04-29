<!doctype html>
<html <?php language_attributes(); ?> class="no-js edge-portfolio-html">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon1.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	
		<script type="text/javascript">
			function closeOnShare( m ) {
				var modal = jQuery( m ).parents( ".modal-container" );
				setTimeout( function(){
					modal.animate({
						opacity: 0
					}, 400, function(){
						modal.removeClass( "show" );
						modal.find( ".modal-empty" ).attr( "value", "" );
						modal.find( ".wpcf7-response-output, .wpcf7-not-valid-tip" ).hide();
					});
				}, 2500 );
			}
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/edgemm_logo@2x.png" alt="Edge Multimedia Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<ul class="menu">
							<li class="menu-item" data-menuitem="share">
								<a href="/">Share</a>
							</li>
							<li class="menu-item" data-menuitem="content">
								<a href="/">Content</a>
							</li>
							<?php
							if ( !$GLOBALS[ 'is_mobile' ] ) :
							?>
							<li class="menu-item" data-menuitem="fullscreen">
								<a href="/">Fullscreen</a>
							</li>
							<? endif; ?>
						</ul>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
