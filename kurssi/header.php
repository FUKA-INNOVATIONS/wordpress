<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fonts/foundation-icons.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<div class="main-container">
<header class="tummansininen main-header">
    <div class="punainen tunnus"><a href="<?php echo get_home_url(); ?>">Oy Firma Ab</a></div>
    <div class="search-block">
    <?php get_search_form(); ?>
    </div>
</header>
<div class="banner">
    <!--  header_image funkktion toiminnallisuus tulee lisata  functions.php tiedostoon  -->
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Banneri">
</div>