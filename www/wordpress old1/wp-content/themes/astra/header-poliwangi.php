<?php
/**
 * Poliwangi Theme Header - Preserving original Astra header with logos
 *
 * @package Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>

<style>
/* Full width container reset while preserving original site header */
#content, 
.site-content, 
#content .ast-container, 
#primary, 
#main, 
article, 
.entry-content {
    max-width: 100% !important;
    width: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
    box-shadow: none !important;
    border: none !important;
    background: transparent !important;
}

#content .ast-container {
    display: block !important;
}

/* Transparent Header Overlay with White Links */
.site-header,
#masthead,
.ast-primary-header-bar,
.main-header-bar,
.ast-header-breadcrumb {
    background: transparent !important;
    background-color: transparent !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 999 !important;
    box-shadow: none !important;
    border-bottom: none !important;
}

/* White nav links for dark hero background */
.main-header-bar a,
.ast-menu-toggle,
.main-navigation a,
.ast-header-sections-navigation a,
.ast-builder-menu a,
.ast-builder-menu-1 a {
    font-family: 'Poppins', sans-serif !important;
    color: #ffffff !important;
}

.main-header-bar a:hover,
.main-navigation a:hover {
    color: #ffc107 !important;
}

/* Dark dropdown/submenu background */
.sub-menu,
.main-header-menu .sub-menu,
.ast-builder-menu .sub-menu,
.ast-builder-menu-1 .sub-menu {
    background-color: #0a2259 !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
}

/* Submenu links styling */
.sub-menu a,
.main-header-menu .sub-menu a,
.ast-builder-menu .sub-menu a,
.ast-builder-menu-1 .sub-menu a {
    color: #ffffff !important;
    background-color: transparent !important;
}

.sub-menu a:hover,
.main-header-menu .sub-menu a:hover,
.ast-builder-menu .sub-menu a:hover,
.ast-builder-menu-1 .sub-menu a:hover {
    color: #ffc107 !important;
    background-color: rgba(255, 255, 255, 0.1) !important;
}

/* Padding top for hero sections to account for absolute header height */
.poliwangi-hero, .berita-hero, .single-news-hero {
    padding-top: 200px !important;
    padding-bottom: 180px !important;
}

/* Hide Astra default sidebar and default footer (custom Poliwangi footer is used instead) */
#secondary, 
.widget-area, 
.entry-header, 
.ast-single-post-title, 
.entry-title,
#colophon,
.site-footer,
.ast-small-footer,
.ast-footer-copyright-section {
    display: none !important;
}
</style>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<div id="page" class="hfeed site">
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
