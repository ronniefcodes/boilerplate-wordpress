<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php echo get_field( 'seo_description', $post->ID ) ?>" />
  <meta name="keywords" content="<?php echo get_field( 'seo_keywords', $post->ID ) ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    $ga_key = get_theme_mod( 'seo_ga_key' );

    if ( $ga_key ) : ?>
      <!-- Google Analytics -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', <?php echo get_theme_mod( 'seo_ga_key' ) ?>, 'auto');
      ga('send', 'pageview');
      </script>
      <!-- End Google Analytics -->`;
  <?php endif; ?>

  <?php wp_head(); ?>
</head>
