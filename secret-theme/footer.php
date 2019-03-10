<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package secretmagazine
 */

?>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'secretmagazine' ); ?></button>
			<?php
			wp_nav_menu([
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			]);
			?>
		</nav><!-- #site-navigation -->

	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
