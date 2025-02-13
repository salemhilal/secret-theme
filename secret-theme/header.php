<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package secretmagazine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!-- 
	SECRET MAGAZINE
	Theme by Salem Hilal (salem.io)
-->
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'secretmagazine' ); ?></a>

	<header id="masthead" class="site-header mt4 center mw8">
		<div class="site-branding tc">
			<?php

			// If there's no logo there, display the name of the blog instead.
			if (has_custom_logo()) {
				the_custom_logo();
			} else {
				if (is_front_page() && is_home()) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;
			}
				
			$secretmagazine_description = get_bloginfo( 'description', 'display' );
			if ($secretmagazine_description || is_customize_preview()) : ?>
				<p class="site-description">
					<?php echo $secretmagazine_description; /* WPCS: xss ok. */ ?>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content center mw8 pa3 pa4-m pa5-l">
