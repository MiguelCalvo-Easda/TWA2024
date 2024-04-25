<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost:8888/brunch/wp-content/themes/TWA/style.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_header(); ?>
<?php get_sidebar(); ?>



<main id="main" class="columns large-12 small-12">
	<?php get_template_part( 'template-parts/loop' ); ?>

	</main>

<?php get_footer(); ?>

</body>
</html>
