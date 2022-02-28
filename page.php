<?php get_header(); ?>
		<?php if ( is_front_page() ) : ?>				
		<?php else : ?>
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
  					yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
				}
		?>
		<?php endif; ?>
	<main id="main">
		<div class="wrap">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
				<?php if ( is_front_page() ) : ?>
   					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php endif; ?>
				<div class="entry-content">
					<?php
					the_content();
					?>
				</div>

				<footer>
					<?php wp_link_pages(); ?>
				</footer>
			</article>
		</div><!-- .wrap -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
