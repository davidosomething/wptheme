<?php
/**
 * Template Name: Global Header
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width">
<meta property="fb:app_id" content="<?php ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> ">
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.3.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div id="sticky"><div id="content">
  <header id="global-header">
  </header>
  <div role="main">
