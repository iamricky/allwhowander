<?php get_header(); ?>
<?php

$category   = get_the_category();
$cat_name   = $category[0]->name;
$body_tags  = ( in_category( "Blog" ) ? "col-sm-8 blog-pg" : "portfolio-pg" );

?>
    <!-- Category Title -->
    <div class="row headline">
        <h1><?php echo $cat_name; ?></h1>
        <img src="<?php bloginfo( "template_url" ); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs">
    </div>

    <section class="row no-margin <?php echo $body_tags; ?>">
        <?php get_template_part( "single", $cat_name ); ?>
    </section>

    <?php if ( in_category( "blog" ) ) : ?>
        <div class="col-sm-4 sidebar" id="sidebar-primary">
            <?php dynamic_sidebar( "blog" ); ?>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
