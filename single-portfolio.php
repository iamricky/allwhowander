<?php

get_header();

$post_type  = get_post_type();
$prev_post  = get_previous_post();
$next_post  = get_next_post();
$body_tags  = "portfolio-pg";

?>
    <!-- Category Title -->
    <div class="row headline">
        <h1><?php echo $post_type; ?></h1>
        <img src="<?php bloginfo( "template_url" ); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs">
    </div>

    <section class="row no-margin <?php echo $body_tags; ?>">
    	<div class="col-sm-7">
			<?php the_content(); ?>
		</div>

		<div class="col-sm-5">
			<p class="meta">
				<span><?php the_title(); ?></span>
				<span>
					<?php echo get_post_meta($post->ID, 'Photographer', true); ?>
				</span>
			</p>

            <?php if( !empty( $prev_post ) ): ?>
                <button type="button" class="btn btn-default" onclick="location.href='<?php echo get_permalink( $prev_post->ID ); ?>';"> &laquo; previous event</button>
            <?php endif; ?>

            <?php if( !empty( $next_post ) ): ?>
                <button type="button" class="btn btn-default" onclick="location.href='<?php echo get_permalink( $next_post->ID ); ?>';">next event &raquo; </button>
            <?php endif; ?>
		</div>
    </section>

<?php get_footer(); ?>
