<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
        register_sidebar( array(
            'name' => ('Footer Left'),
            'id' => 'footer-left',
            'description' => 'Widget for left part of footer',
            'before_widget' => '<div class="widget-sidebar widget-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));
        register_sidebar( array(
            'name' => ('Footer Middle'),
            'id' => 'footer-middle',
            'description' => 'Widget for middle part of footer',
            'before_widget' => '<div class="widget-sidebar widget-footer widget-middle">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));
        register_sidebar( array(
            'name' => ('Footer Right'),
            'id' => 'footer-right',
            'description' => 'Widget for right part of footer',
            'before_widget' => '<div class="widget-sidebar widget-footer widget-middle widget-right">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));
    }

add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );


?>
