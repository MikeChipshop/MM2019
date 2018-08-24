<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2b9fd2">
    <meta name="msapplication-TileColor" content="#2b9fd2">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
    <meta name="msvalidate.01" content="7B73E822F25D06459FF7845B082309F1" />
</head>
<body <?php body_class(); ?>>
	<header class="mini_main-header fade-in">
    	<div class="mini_wrap">
        	<div class="mini_logo">
    			<a href="<?php bloginfo('url'); ?>"><h1><img src="<?php bloginfo('stylesheet_directory'); ?>/img/miniman-logo-round.png" alt="Miniman Web Design - Return Home">Miniman</h1></a>
            </div>
            <div class="mini_nav">
                  <nav class="mini_main-nav clearfix">
                    <button class="mini_open-mobile-nav"><span class="genericon genericon-menu"></span> Menu</button>
                      <ul><?php wp_nav_menu( array('menu' => 'Main Menu' ));?></ul>
                  </nav>
            </div>
        </div>
    </header>
