<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cinchshare
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&amp;family=Nunito:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K3GJBF8');</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3GJBF8"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<script>
const urlParams = new URLSearchParams(window.location.search);
var expires = (new Date(Date.now()+ 86400*1000)).toUTCString();

if (urlParams.get('a')!=null){	
 document.cookie='a=' + urlParams.get('a') + '; expires=' + expires + ';path=/;';
}
if ( urlParams.get('folderid')!=null){
 document.cookie='folderid=' + urlParams.get('folderid') + '; expires=' + expires + ';path=/;';
}
</script>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>
