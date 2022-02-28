<?php get_header(); ?>

	<?php if ( is_front_page() || is_home() ) : ?>
		<?php if ( get_bloginfo( 'description' ) !== '' ) : ?>
			<header id="page-header">
				<div class="wrap">
					<h2 class="title"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</header>
		<?php endif; ?>

	<?php else : ?>
		<header id="page-header">
			<div class="wrap">
				<?php the_title( '<h2 class="title">', '</h2>' ); ?>
			</div>
		</header>
	<?php endif; ?>

	<main id="main">
		<div class="wrap posts-list">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content' );
				}

				get_template_part( 'template-parts/pagination' );
			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
		</div><!-- .wrap -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
