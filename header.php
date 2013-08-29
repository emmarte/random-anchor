<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo page_title('Page can’t be found'); ?> &mdash; <?php echo site_name(); ?></title>
<meta name="description" content="<?php echo site_description(); ?>">
<link rel="stylesheet" href="<?php echo theme_url('css/style.css'); ?>">
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo theme_url('js/svg.js');?>"></script>
<script type="text/javascript" src="<?php echo theme_url('js/scroll.js');?>"></script>
<meta name="viewport" content="width=device-width">
<meta name="generator" content="Anchor CMS">
<meta property="og:title" content="<?php echo site_name(); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo current_url(); ?>">
<meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
<meta property="og:site_name" content="<?php echo site_name(); ?>">
<meta property="og:description" content="<?php echo site_description(); ?>">
<?php if(customised()): ?>
      <!-- Custom CSS -->
      <style><?php echo article_css(); ?></style>
      <!--  Custom Javascript -->
      <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  </head>
<body id="top">
<div id="layout">
<div id="header">
<a href="<?php echo rss_url(); ?>"><img id="rss" class="svg rss-link" src="<?php echo theme_url('/img/rss.svg'); ?>"/></a>
<h1><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
<?php if(has_menu_items()): ?>
<nav id="main" role="navigation">
<ul>
<?php while(menu_items()): ?>
<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
<?php endwhile; ?>
<?php endif; ?>
</ul>
</nav>
</div>
<div id="content">