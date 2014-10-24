<div class="top-meta-row">
	<a name="post-<?php the_ID(); ?>"></a>
	<span class="title"><?php the_title(); ?></span>
	<span class="date"><?php echo get_the_date(); ?></span>
</div>

<div class="img-row">
	<?php the_post_thumbnail('blog-post-thumbnail', array('class' => 'img-responsive')); ?>
	<a href="http://www.pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" target="_blank">
		<img src="<?php bloginfo("template_url"); ?>/img/pin_me.png" class="img-responsive pin-me">
	</a>
</div>

<div class="content-row">
	<?php the_content(); ?>
</div>

<a id="comments" name="comments"></a>
<div class="comment-row">
	<?php comments_template(); ?>
</div>
