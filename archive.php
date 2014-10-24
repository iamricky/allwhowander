<?php

get_header();

$post_type  = get_post_type();
$body_tags  = "row portfolio-pg";
$clearfix   = 0;

?>

    <!-- category title -->
    <div class="row headline">
        <h1><?php echo $post_type ?></h1>
        <img src="<?php bloginfo( "template_url" ); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs">
    </div>

    <section class="<?php echo $body_tags; ?>">
        <?php if ( have_posts() ) : ?>

            <!-- category posts -->
            <?php while ( have_posts() ) : the_post(); $clearfix++ ?>
                <?php get_template_part( "posts/partial", $post_type ); ?>

                <?php if ( $clearfix%3 === 0 ): ?>
                    <!-- portfolio clearfix -->
                    <div class="clearfix"></div>
                <?php endif; ?>
            <?php endwhile; ?>

        <?php endif; ?>
    </section>

    <?php get_template_part( "content", "reviews" ); ?>
<?php get_footer(); ?>
