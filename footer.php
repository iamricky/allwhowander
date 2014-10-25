
			<?php get_template_part( "partials/layout", "social" ); ?>
		</div> <!-- container end -->
		<footer>
			<div class="custom-border"></div>
			<div class="container">
				<div class="col-sm-3 left">
					<h6>navigate</h6>
					<ul>
						<?php wp_nav_menu(); ?>
					</ul>
				</div>
				<div class="col-sm-6 center">
					<h6>&copy; 2013 all rights reserved all who wander</h6>
					<p>site design <b>
							<a href="http://www.carlipapp.com/">carli papp</a>
						</b>
					</p>
				</div>
				<div class="col-sm-3 right">
					<h6>inquiries</h6>
					<ul>
						<li><a href="tel:973-970-0781">973-970-0781</a></li>
						<li><a href="http://www.allwhowanderevents.com/contact/" class="complete-form">fill out a form ></a></li>
						<p><a href="mailto:nicole@allwhowanderevents.com">nicole@allwhowanderevents.com</a></p>
					</ul>
				</div>
			</div>
		</footer>
		<!-- Javcascript -->
		<?php wp_footer(); ?>
		<script>
		$(document).ready(function(){
			$(".feature-init").click(function(){
				$(".my-panel").fadeToggle();
			});
			$('.portfolio-pg [title], [alt]').each( function(){
				var $this = $(this);
					$this.data('title',$this.attr('title'));
					$this.removeAttr('title');
			});
			$('.portfolio-pg [title], [alt]').each( function(){
				var $this = $(this);
					$this.data('title',$this.attr('title'));
					$this.removeAttr('title');
			});
			<?php $cat_blog = 'Blog'; if((is_category($cat_blog) or in_category($cat_blog)) or is_search()) : ?>
			$('.img-row').hover( function () { $('.pin-me',this).show(); }, function () { $('.pin-me',this).hide(); } );
			$("img[class*=\"wp-image-\"]").addClass('img-responsive');
			<?php endif; ?>
		});
		</script>
	</body>
</html>
