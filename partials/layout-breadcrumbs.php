<?php

$breadcrumbs = array(
                "one"   => "planning &amp; full design",
                "two"   => "planning &amp; partial design",
                "three" => "month-of planning",
                "four"  => "looking for something else"
            );

?>
<div class="row services-pg-breadcrumbs">

    <?php foreach ( $breadcrumbs as $k => $v ) : ?>
        <div class="col-sm-3">
            <h3>
                <a title="<?php echo $k ?>" rel="services-nav">
                    <?php echo $v ?>
                </a>
            </h3>
        </div>
    <?php endforeach; ?>
</div>
