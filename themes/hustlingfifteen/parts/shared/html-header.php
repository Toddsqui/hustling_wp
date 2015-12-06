<!DOCTYPE HTML>
<html class="no-js" lang="en">
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>" />

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Main CSS Stylesheet loaded in functions -->

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/_/js-production/modernizr.custom.28103.js"></script>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
