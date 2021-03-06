<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="wrapper">
	<header class="h-page">
		<div class="container-fluid">
			<h1 class="logotype"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?><span>.</span></a></h1>
			<button class="hamburger">&#9776;</button>
			<button class="cross">&#735;</button>
				<?php
				$args = [ 'theme_location' => 'primary' ];
				wp_nav_menu( $args ); ?>
		</div>
	</header>