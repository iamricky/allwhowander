<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('name'); ?></title>

		<link href="<?php bloginfo("template_url"); ?>/style.css" rel="stylesheet">
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/respond.min.js"></script>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<nav class="navbar navbar-default navbar-fixed-top hidden-xs" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-sm-push-10 feature-init feature-copy">
						<p>Featured Event</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 col-sm-push-7">
						<div class="feature-slide feature-init"></div>
						<div class="my-panel">
							<?php query_posts('category_name=featured&showposts=1'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<?php the_post_thumbnail('portfolio-post-thumbnail', array('class' => "img-responsive")); ?>
							<span><?php the_title(); ?></span>
							<button type="button" class="btn btn-default" onclick="location.href='<?php echo get_permalink(); ?>';">More on the blog</button>
							<?php endwhile; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="body-padding-top hidden-xs"></div>
				
		<div class="container line-height"> <!-- container start -->
			<div class="row my-nav">
				<div class="logo visible-xs"><a href="www.allwhowanderevents.com"></a></div>
				<?php wp_nav_menu(); ?>
				<div class="logo hidden-xs"><a href="www.allwhowanderevents.com"></a></div>
			</div>