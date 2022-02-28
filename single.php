<?php get_header(); ?>
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
  				yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
			}
		?>
	<main id="main">
		<div class="wrap">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
      <?php if ( is_front_page() ) : ?>
   		<h2 class="entry-title">
   			<?php the_title(); ?>
   		</h2>
      <?php else : ?>
         <h1 class="entry-title">
            <?php the_title(); ?>
         </h1>
      <?php endif; ?>

				<div class="entry-content">
					<?php
					the_content();
					?>
				</div>

				<footer>
					<?php wp_link_pages(); ?>
					<div class="entry-info">
						<p>
							<span class="entry-date">
								<?php esc_html_e( ' on ', 'frugix' ); ?>
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php the_time( get_option( 'date_format' ) ); ?>
								</a>
							</span>

							<?php
							if ( ! is_singular() ) {
								esc_html_e( ' &ndash; ', 'frugix' );
								comments_popup_link( false, false, false, 'entry-comments' );
							}
							?>
							<br />

							<?php the_tags( '<span class="entry-tags"> &ndash; ' . __( 'Tags:', 'frugix' ) . ' ', ', ', '</span>' ); ?>
						</p>
						<?php edit_post_link(); ?>
						<hr />
					</div>
				</footer>
			</article>
		</div><!-- .wrap -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
