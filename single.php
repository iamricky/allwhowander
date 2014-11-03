<?php get_header();

if ( in_category( "blog" ) ) {
    $category   = get_the_category();
    $page_title = strtolower( $category[0]->cat_name );
    $body_tags  = "col-sm-8 blog-pg";
} else {
    $page_title = get_post_type();
    $body_tags  = "portfolio";
}

?>
    <!-- title -->
    <div class="row headline">
        <h1><?php echo $page_title; ?></h1>
        <img src="<?php bloginfo( "template_url" ); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs">
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="row no-margin <?php echo $body_tags; ?>">
            <?php get_template_part( "partials/single", $page_title ); ?>
        </section>

        <?php if ( in_category( "blog" ) ) : ?>
            <?php get_template_part( "partials/layout", "sidebar" ); ?>
        <?php endif; ?>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
