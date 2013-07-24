<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php include('includes/description.php'); ?>"/>
<meta name="author" content="Chris' Collective Hair Systems" />
<meta name="keywords" content="<?php include('includes/keywords.php'); ?>" />
<title><?php include('includes/title.php'); ?>| Chris' Collective Hair Systems</title>
<!-- FAVICON AREA -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
<!-- For non-Retina iPhone, iPod Touch, and Android 2.2+ devices: -->
<link rel="apple-touch-icon" href="img/chris_54.png">
<!-- For first-generation iPad: -->
<link rel="apple-touch-icon" sizes="72x72" href="img/chris_72.png">
<!-- For iPhone 4 with high-resolution Retina display: -->
<link rel="apple-touch-icon" sizes="114x114" href="img/chris_114.png">
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>

<!-- Header and Nav -->
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1> <a href="index.php"> Chris' Collective Hair Systems </a> </h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="javascript:;"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section"> 
    
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider"></li>
      <li<?php if ($page == 'about.php') { print ' class="current"'; } ?>><a href="about.php">About</a></li>
      <li class="divider"></li>
      <li<?php if ($page == 'product.php') { print ' class="current"'; } ?>><a href="product.php">Products</a></li>
      <li class="divider"></li>
      <li<?php if ($page == 'services.php') { print ' class="current"'; } ?>><a href="services.php">Services</a></li>
      <li class="divider"></li>
      <li<?php if ($page == 'contact.php') { print ' class="current"'; } ?>><a href="contact.php">Contact</a> </li>
    </ul>
  </section>
</nav>

<!-- End Header and Nav --> 