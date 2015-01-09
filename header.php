<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo( "name" ); ?></title>

		<link href="<?php bloginfo( "template_url" ); ?>/style.css" rel="stylesheet">
		<script type="text/javascript" src="<?php bloginfo( "template_url" ); ?>/js/respond.min.js"></script>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="body-padding-top hidden-xs"></div>

		<div class="container line-height"> <!-- container start -->
			<div class="row my-nav">
				<?php if ( is_home() ): ?>
					<div class="logo visible-xs"><a href="www.allwhowanderevents.com"></a></div>
				<?php endif; ?>
				<?php wp_nav_menu( array( "container" => false, "menu_class" => "hidden-xs hidden-sm" ) ); ?>
				<div class="logo hidden-xs"><a href="www.allwhowanderevents.com"></a></div>
			</div>
