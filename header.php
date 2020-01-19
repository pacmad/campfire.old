<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( ' | ', true, 'right' ) . bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<?php // Since 5.2.0 the wp_body_open hook shoud be called here.
	 if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>
	<header class="site-header">
		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
	</header>
	<main class="site-main">
