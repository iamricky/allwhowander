<article id="post-<?php the_ID(); ?>" <?php post_class( "col-sm-4" ); ?>>
	<a href="<?php echo get_permalink(); ?>">
		<?php the_post_thumbnail(); ?>

		<span class="title"><?php the_title(); ?></span>
	</a>
</article>
