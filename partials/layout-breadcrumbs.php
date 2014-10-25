<?php

$breadcrumbs = array(
                "planning &amp; full design",
                "planning &amp; partial design",
                "month-of planning",
                "looking for something else"
            );

?>
<div class="row services-pg-breadcrumbs">

    <?php foreach ( array_values( $breadcrumbs ) as $k => $v ) : ?>
        <div class="col-sm-3">
            <h3>
                <a title="<?php echo $k ?>" rel="services-nav">
                    <?php echo $v ?>
                </a>
            </h3>
        </div>
    <?php endforeach; ?>
</div>
