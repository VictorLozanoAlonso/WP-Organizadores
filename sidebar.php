	<div id="hero">
		<div class="wrap flex-grid">
			<?php if ( is_active_sidebar( 'footer-widgets-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets-1' ); ?>
			<?php else : ?>

			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-widgets-2' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets-2' ); ?>
			<?php else : ?>

			<?php endif; ?>			
		</div><!-- .wrap -->
	</div><!-- #hero -->
