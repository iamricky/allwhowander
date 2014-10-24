<section class="row no-margin detail">
    <p class="title"><span>reviews</span></p>
    <?php

    $args = array(
        "post_type" => array( "Reviews" ),
        "orderby"   => "date"
    );
    $reviews = new WP_Query ( $args ); ?>

    <?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
        <article <?php post_class(); ?>>
            <p class="quote"><?php the_content(); ?>
                <span>&mdash; <?php the_title(); ?></span>
            </p>
        </article>
    <?php endwhile; wp_reset_query(); ?>
</section>
