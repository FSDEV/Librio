<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/rss xml" title="Subscribe to <?php bloginfo('name'); ?>" href=" <?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" media="screen" /><![endif]-->
	
	<?php wp_enqueue_script("custom_js", get_bloginfo( 'stylesheet_directory' )."/js/custom.js", false, $pp_theme_version); ?>
	
	<?php wp_head(); ?>
</head>

<body>

<div id="container">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><span><?php bloginfo('description'); ?></span></h1>
		<div id="search">
          <?php // some stuff to work with the livesearch plugin 'live-search-popup'
            if(function_exists('livesearchpopup_results')) : ?>
              <form name="ls_form" class="form" id="searchform" method="get" action="<?php print get_bloginfo('wpurl')?>">
                <div class="editbox"><input type="text" name="s" id="s" /></div>
              </form>
              <?php livesearchpopup_results();
            else : ?>
              <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                  <input type="text" value="Search" name="s" id="s" onfocus="if(this.value=='Search')this.value=''" onblur="if(this.value=='')this.value='Search'" />
              </form><?php
            endif; ?>
		</div>
	</div>

	<div id="nav">
		<ul>
			<li <?php if(!is_page()) echo 'class="current_page_item"'; ?>><a href="<?php echo get_option('home'); ?>/">Home</a></li>
			<?php wp_list_pages('title_li='); ?>
		</ul>
		<a href="<?php bloginfo('rss2_url'); ?>" id="feed">Subscribe</a>
	</div>
	
	<div id="wrapper">
