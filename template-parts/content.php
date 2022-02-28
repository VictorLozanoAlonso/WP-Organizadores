			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
				<?php if ( ! is_single() ) : ?>
					<header>
						<?php the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
					</header>
				<?php endif; ?>

				<div class="entry-content">
					<?php
					the_content( 'More', false, 'frugix' );
					?>
				</div>

				<footer>
					<?php wp_link_pages(); ?>
					<?php get_template_part( 'template-parts/entry-info' ); ?>
				</footer>
			</article>
