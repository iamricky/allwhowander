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
                    <?php

                    query_posts( 'category_name=featured&showposts=1' );

                    while ( have_posts() ) : the_post();
                    the_post_thumbnail(
                        "portfolio-post-thumbnail",
                        array( "class" => "img-responsive" )
                    ); ?>
                    <span><?php the_title(); ?></span>
                    <button type="button" class="btn btn-default" onclick="location.href='<?php echo get_permalink(); ?>';">More on the blog</button>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</nav>
