<?php get_header(); ?>
	<?php if ( function_exists('yoast_breadcrumb') ) {
  				yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
			}
	?>
	<main id="main">
		<div class="wrap posts-list">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>

							<div class="entrada">
							<header>
								<?php the_title( '<h2 class="exerpt-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
							</header>
							<div class="entry-content">
									<div class="thumbnail">									
								<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a><?php
										} ?>
					    	    	</div>
									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>

				<?php }
				get_template_part( 'template-parts/pagination' );

			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
		</div><!-- .wrap -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>