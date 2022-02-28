
<article <?php post_class( array( 'entry', 'not-found' ) ); ?>>
	<div class="entry-content">
		<p><?php esc_html_e( 'Sorry to have to tell you this, but there&rsquo;s nothing here. If you&rsquo;re looking for something specific, keep searching!', 'frugix' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</article>
