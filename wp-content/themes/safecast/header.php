<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

  <meta charset="<?php bloginfo('charset'); ?>">
  
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <?php if (is_search()) { ?>
  <meta name="robots" content="noindex, nofollow" /> 
  <?php } ?>

  <title>
       <?php
          if (function_exists('is_tag') && is_tag()) {
             single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
          elseif (is_archive()) {
             wp_title(''); echo ' Archive - '; }
          elseif (is_search()) {
             echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
          elseif (!(is_404()) && (is_single()) || (is_page())) {
             wp_title(''); echo ' - '; }
          elseif (is_404()) {
             echo 'Not Found - '; }
          if (is_home()) {
             bloginfo('name'); echo ' - '; bloginfo('description'); }
          else {
              bloginfo('name'); }
          if ($paged>1) {
             echo ' - page '. $paged; }
       ?>
  </title>
  
  <meta name="title" content="<?php
          if (function_exists('is_tag') && is_tag()) {
             single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
          elseif (is_archive()) {
             wp_title(''); echo ' Archive - '; }
          elseif (is_search()) {
             echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
          elseif (!(is_404()) && (is_single()) || (is_page())) {
             wp_title(''); echo ' - '; }
          elseif (is_404()) {
             echo 'Not Found - '; }
          if (is_home()) {
             bloginfo('name'); echo ' - '; bloginfo('description'); }
          else {
              bloginfo('name'); }
          if ($paged>1) {
             echo ' - page '. $paged; }
       ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
  <meta name="google-site-verification" content="">
  <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
  
  <meta name="author" content="Your Name Here">
  <meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

  <!-- Dublin Core Metadata : http://dublincore.org/ -->
  <meta name="DC.title" content="Project Name">
  <meta name="DC.subject" content="What you're about.">
  <meta name="DC.creator" content="Who made this site.">
  <link rel="shortcut icon" 
        href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico"
  >
   
  <link rel="apple-touch-icon" 
        href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png"
  >
 
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" 
        href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" 
        type="text/css" 
        media="screen" 
  />
  
  <script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  
    <header id="header">
      <div class="header-contents">
        <a href="http://localhost:8888/Safecast/Safecast.org/" class="logo ir"><h1>Safecast</h1></a>
        <?php wp_nav_menu( array('menu' => 'primary' )); ?>
      </div>
    </header>


