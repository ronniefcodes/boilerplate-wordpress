<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part( 'partials/head' ); ?>

  <body <?php body_class( 'page--tag' ) ?>>
    <?php get_header(); ?>

		<main role="main">
			<!-- section -->
			<section>

				<h1>Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

				<?php get_template_part('loop'); ?>



			</section>
			<!-- /section -->
		</main>

    <?php get_template_part( 'partials/footer' ); ?>

    <?php wp_footer(); ?>
  </body>
</html>
