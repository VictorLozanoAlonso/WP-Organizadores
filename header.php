<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#fff" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
	<!-- Codigo para adsense - Google Adsense -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6383740821711465",
          enable_page_level_ads: true
     });
    </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136631664-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

		gtag('config', 'UA-136631664-1');
	</script>
<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
	<header id="header">
		<div class="wrap">
			<?php if ( has_custom_logo() ) : ?>
				<div class="logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
			<div id="nav">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php if (function_exists ('adinserter')) echo adinserter (7); ?>
			</div><!-- #nav -->
		</div><!-- .wrap -->
		<div class="menu-principal">
		<nav id="main-menu">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'menu'           => __( 'Main Menu', 'frugix' ),
						'depth'          => 2,
					) );
					?>
				</nav>
					</div>
	</header>
