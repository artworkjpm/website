<!DOCTYPE html>
<html>

<head>
  <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="http://www.artworkjpm.biz/wp-content/uploads/2014/09/2.png" />
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/font-awesome-4/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
  
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header>
    <div class="hidden-bar">
      <i class="fa fa-bars"></i>
    </div>
    <div class="logo">
      <img src="<?php bloginfo('template_directory') ?>/assets/images/ryanair.gif">
      <h1>Test</h1>
    </div>
  </header>