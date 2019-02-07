<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part( 'partials/head' ); ?>

  <body <?php body_class( 'page--search' ) ?>>
    <?php get_header(); ?>

		<main role="main">
			<!-- section -->
			<section>

				<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

				<?php get_template_part('loop'); ?>



			</section>
			<!-- /section -->
		</main>

    <?php get_template_part( 'partials/footer' ); ?>

    <?php wp_footer(); ?>
  </body>
</html>
