<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Interactvitiy and Engagement</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href=" <?php  bloginfo('stylesheet_url');?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <header class="row">
            <div class="nine columns">
                <h1 class="hide"><a href="<?php bloginfo('url')?>"><?php bloginfo('name');?></a>
                </h1>
                <h2 class="hide"><?php bloginfo('description');?></h2>
            </div>
        </header>
        <!-- Add Menu Here -->
        <div>
            <div class="four columns sidemenu">
                <h1>Hi.</h1>
                <?php get_search_form(); ?>
                <?php wp_nav_menu(array(
                    'menu' => 'Menu',
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                ));?>
                <ul class="social">
                    <li><a href="http://www.instagram.com/guanoftw"><i class="fa fa-instagram fa-3x"></i></a></li>
                    <li><a href="http://www.twitter.com/guanoftw"><i class="fa fa-twitter fa-3x"></i></a></li>
                    <li><a href="mailto:aliguan726@gmail.com"><i class="fa fa-envelope fa-3x"></i></a></li>
                </ul>

            </div>
        </div>

<!-- end header -->
