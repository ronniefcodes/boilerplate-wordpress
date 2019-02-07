<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part( 'partials/head' ); ?>

  <body <?php body_class( 'page--category' ) ?>>
    <?php get_header(); ?>

		<main role="main">
			<!-- section -->
			<section>

				<h1>Categories for <?php single_cat_title(); ?></h1>

				<?php get_template_part('loop'); ?>



			</section>
			<!-- /section -->
		</main>

    <?php get_template_part( 'partials/footer' ); ?>

    <?php wp_footer(); ?>
  </body>
</html>
