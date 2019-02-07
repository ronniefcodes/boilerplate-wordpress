<?php
  function enqueue_page_scripts() {
    wp_enqueue_script( 'page_scripts', get_template_directory_uri() . '/scripts/page.js', array( 'enqueue_app_scripts' ), false, true );
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_page_scripts', 100 );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part( 'partials/head' ); ?>

  <body <?php body_class() ?>>
    <?php get_header(); ?>

		<main role="main">
			<!-- section -->
			<section>

				<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2>Sorry, nothing to display.</h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</main>

    <?php get_template_part( 'partials/footer' ); ?>

    <?php wp_footer(); ?>
  </body>
</html>
