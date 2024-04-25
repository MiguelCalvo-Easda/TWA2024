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
<header class="site-header">

	<div class="site-branding">
		<h1 class="site-title"><a href="" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<p class="site-description"><?php bloginfo('description'); ?></p>
	</div>

	<div class="navigation-main-menu">
		<div class="navigation-wrap">
		<nav> <ul> 
                <?php wp_nav_menu(array("menu" => "Principal" ) ); ?>
              </ul>
</nav> 
		</div>
	</div>

</header>

<img  src="http://localhost:8888/brunch/wp-content/uploads/2024/04/imagen1.jpeg" alt="portada">


<footer>
	</div>
	<div class="site-info row">
		<div class="columns small-12">
			Hecho en la EASDA.
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
