<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<?php thinkup_hook_header(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Carpentier Technology</title>
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?><?php thinkup_bodystyle(); ?>>
<?php /* Body hook */ thinkup_hook_bodyhtml(); ?>
<?php /* Notification Bar */ thinkup_input_notification(); ?>
<?php /* Header Image */ thinkup_input_headerimage(); ?>
<div id="body-core" class="hfeed site">

	<header>
	<div id="site-header">
    <style>
      body{
        background-color: transparent;
        margin: 0px }
      #oscilliscope{
        width: 100%;
        line-height: 0; }
    </style>
    <form>
      <div id='oscilliscope'>
        <img id="banner_logo"; style="position:absolute; width:100%;" src='<?php get_template_directory_uri()?>/wp-content/uploads/2017/08/cropped-cropped-banner-logo-1600x200-v2.png';>
        <canvas id='oscilliscopeVisualiser';></canvas>
      </div>
    </form>
		<?php /* Add header - above slider */ thinkup_input_headerlocationabove(); ?>
		<?php /* Add responsive header menu */ thinkup_input_responsivehtml2_above(); ?>
		<?php /* Add sticky header */ thinkup_input_headersticky(); ?>
		<?php /* Custom Slider */ thinkup_input_sliderhome(); ?>
		<?php /* Custom Intro - Above */ thinkup_custom_introabove(); ?>
		<?php /* Custom Slider */ thinkup_input_sliderpage(); ?>
		<?php /* Add header - above slider */ thinkup_input_headerlocationbelow(); ?>
		<?php /* Add responsive header menu */ thinkup_input_responsivehtml2_below(); ?>
		<?php /* Custom Intro - Below */ thinkup_custom_introbelow(); ?>
	</div>
	</header>
	<!-- header -->

	<?php /*  Call To Action - Intro */ thinkup_input_ctaintro(); ?>
	<?php /*  Pre-Designed HomePage Content */ thinkup_input_homepagesection(); ?>

	<div id="content">
	<div id="content-core">

		<div id="main">
		<div id="main-core">
