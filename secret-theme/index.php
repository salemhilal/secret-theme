<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package secretmagazine
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<div class="mw9 center ph3-ns">
				<div class="cf ph2-ns">

					<?php while ( have_posts() ) : the_post();
						/* the Loop™ */ ?>
						
						<div class="fl w-100 w-third-ns pa3">
							<div class="bg-white pv4">
								<?php if (has_post_thumbnail()) : ?>
									<div class="secret-post-thumbnail ba bw2 b--near-black">	
										<?php the_post_thumbnail(); ?>
									</div>
								<?php endif; ?>
								<a href="<?php the_permalink() ?>" class="db pb2 black-90 link lh-title break-word bg-animate hover-bg-light-blue">
									<?php the_title(); ?>
								</a>
							</div>
						</div>

						<?php
						/*
						* Include the Post-Type-specific template for the content.
						* TODO: Put images here only if there's a featured image.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						// get_template_part( 'template-parts/content', get_post_type() );

					endwhile; ?>
				</div>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
