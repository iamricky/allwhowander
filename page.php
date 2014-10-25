<?php get_header(); ?>
<?php

$page_title	= strtolower( get_the_title() );
$body_class	= array( "row", "no-margin", $page_title . "-pg" );

?>

	<?php if ( !is_page( "about" ) ) : ?>
		<section class="jumbotron hero">
			<img src="<?php bloginfo( "template_url" ); ?>/img/hero/<?php echo $page_title ?>.jpg" class="img-responsive">
		</section>
	<?php endif; ?>

	<div class="row headline">
		<h1><?php the_title(); ?></h1>
		<img src="<?php bloginfo( "template_url" ); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs">
	</div>

	<div id="post-<?php the_ID(); ?>" <?php post_class( $body_class ); ?>>
		<?php if ( is_page( "services" ) ) : ?>
		<?php get_template_part( "partials/layout", "breadcrumbs" ); endif; ?>
		<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
	</div>

<?php get_footer(); ?>
