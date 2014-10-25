<section class="jumbotron">
    <div id="Fader" class="fader">
        <?php

        $args = array(
                    "post_type" => array( "Slides" ),
                    "orderby"   => "date"
                );
        $slides = new WP_Query ( $args );

        while ( $slides->have_posts() ) : $slides->the_post(); ?>
            <img class="slide" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" />

        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
