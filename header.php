<?php
/**
 * The header for our theme.
 *
 * @package youfoundNate_Web_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<script>document.body.className += ' fade-out';</script>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>

			<header id="masthead" class="site-header" role="banner">

			</header><!-- #masthead -->


			
			<div id="content" class="site-content">
