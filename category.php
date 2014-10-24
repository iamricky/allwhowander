<?php

get_header();

$category   = single_cat_title( "", false );
$body_tags  = "col-sm-8 blog-pg";

?>

    <!-- category title -->
    <div class="row headline">
        <h1><?php echo $category ?></h1>
        <img src="<?php bloginfo( "template_url" ); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs">
    </div>

    <section class="<?php echo $body_tags; ?>">
        <?php if ( have_posts() ) : ?>

            <!-- category posts -->
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( "posts/partial", $category ); ?>
            <?php endwhile; ?>

            <?php get_template_part( "pagination" ); ?>
        <?php endif; ?>
    </section>

    <aside class="col-sm-4 sidebar" id="sidebar-primary">
        <?php dynamic_sidebar( "blog" ); ?>
    </aside>
<?php get_footer(); ?>
