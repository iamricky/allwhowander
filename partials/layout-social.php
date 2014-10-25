<?php

$pages = array (
          "facebook"   => "https://www.facebook.com/allwhowanderevents",
          "twitter"    => "https://twitter.com/wanderevents",
          "pinterest"  => "http://www.pinterest.com/whowander/",
          "instagram"  => "http://instagram.com/allwhowanderevents"
        );
?>
<div class="row hidden-xs">
    <div class="col-sm-7">
        <img src="<?php bloginfo("template_url"); ?>/img/social-stroke.png" class="img-responsive social-stroke-align" >
    </div>

    <div class="col-sm-5">
        <span class="edgy footer">follow along</span>
        <ul class="socialnav">
            <?php foreach ( $pages as $k => $v ) : ?>
                <li class="<?php echo $k ?>">
                    <a href="<?php echo $v ?>" target="_blank"></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
