<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="top-meta-row">
		<span class="title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</span>

		<span class="date"><?php echo get_the_date(); ?></span>
	</header>

	<section class="img-row">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></a>

		<a href="http://www.pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/pin_me.png" class="img-responsive pin-me"></a>
	</section>

	<section class="content-row">
		<?php the_content(); ?>
		<img src="<?php bloginfo("template_url"); ?>/img/social-stroke.png" class="img-responsive social-stroke-align hidden-xs" >
	</section>

	<section class="comment-row">
		<div class="comment-num">
		<a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'leave a note', 'one note', '% notes' ); ?></a>
		<ul class="share-links">
			<li>share</li> &raquo;

			<!-- Pinterest -->
			<li><a href="http://www.pinterest.com/pin/create/bookmarklet/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" target="_blank">pinterest</a></li> /

			<!-- Facebook -->
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">facebook</a></li> /

			<!-- Twitter -->
			<li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank">twitter</a></li>
		</ul>
	</section>
</article>
