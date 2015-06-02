<?php

/* ----------------------------------------------------------------------------------- */
/* This file will be referenced every time a template/page loads on your Wordpress site
  /* This is the place to define custom fxns and specialty code
  /*----------------------------------------------------------------------------------- */

// Define the version so we can easily replace it throughout the theme
define('IZWT_VERSION', 1.0);

/* ----------------------------------------------------------------------------------- */
/* Add Rss feed support to Head section
  /*----------------------------------------------------------------------------------- */
add_theme_support('automatic-feed-links');

/* ----------------------------------------------------------------------------------- */
/* Register main menu for Wordpress use
  /*----------------------------------------------------------------------------------- */
register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'iz_theme'), // Register the Primary menu
        // Copy and paste the line above right here if you want to make another menu, 
        // just change the 'primary' to another name
        )
);

/* ----------------------------------------------------------------------------------- */
/* Activate sidebar for Wordpress use
  /*----------------------------------------------------------------------------------- */

function iz_register_sidebars() {
    register_sidebar(array(// Start a series of sidebars to register
        'id' => 'sidebar', // Make an ID
        'name' => 'Sidebar', // Name it
        'description' => 'Take it on the side...', // Dumb description for the admin side
        'before_widget' => '<div>', // What to display before each widget
        'after_widget' => '</div>', // What to display following each widget
        'before_title' => '<h3 class="side-title">', // What to display before each widget's title
        'after_title' => '</h3>', // What to display following each widget's title
        'empty_title' => '', // What to display in the case of no title defined for a widget
            // Copy and paste the lines above right here if you want to make another sidebar, 
            // just change the values of id and name to another word/name
    ));
}

// adding sidebars to Wordpress (these are created in functions.php)
add_action('widgets_init', 'iz_register_sidebars');

/* ----------------------------------------------------------------------------------- */
/* Enqueue Styles and Scripts
  /*----------------------------------------------------------------------------------- */


function iz_add_support_theme() {
    add_theme_support('post-thumbnails');
    add_image_size('about', 300, 280, true);
    add_image_size('bg_large', 620, 580, true);
}

add_action('after_setup_theme', 'iz_add_support_theme');

function iz_post_class($post_id) {
    $taxs = get_the_terms($post_id, 'attribute');
    $terms = get_the_terms($post_id, 'iz_project_cat');
    $cats = get_the_category($post_id);
    $tags = wp_get_post_tags($post_id);
    
    $class = 'element clearfix ';
    if (!has_term('col2-3', 'attribute', $post_id)) {
        $class .= 'col1-3 ';
    }
    $post_type = get_post_type($post_id);
    switch ($post_type) {
        case 'post':
            $class .= 'blog ';
            break;
        case 'iz_project':
            $class .= 'portfolio ';
            break;
        default:
            $class .= $post_type.' ';
            break;
    }
    if ($taxs) {
        foreach ($taxs as $tax) {
            $class .= $tax->slug . ' ';
        }
    }
    if ($terms) {
        foreach ($terms as $term) {
            $class .= $term->slug . ' ';
        }
    }
    if ($cats) {
        foreach ($cats as $cat) {
            $class .= $cat->slug . ' ';
        }
    }
    if($tags){
        foreach ($tags as $tag){
            $class .= $tag->slug.' ';
        }
    }
    echo $class;
}

function iz_post_style($post_id) {
    $style = '';
    if (has_term('background', 'attribute', $post_id)) {
        if(has_term('col2-3', 'attribute', $post_id)){
            $style .= 'background: url(' . wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'bg_large')[0] . ') no-repeat;';
        }else{
            $style .= 'background: url(' . wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'about')[0] . ') no-repeat;';
        }
    }
    echo $style;
}

function iz_term_project_list($post_id, $term) {
    $terms = get_the_terms($post_id, $term);
    $list = '';
    if ($terms) {
        foreach ($terms as $term) {
            $list .= $term->name . ', ';
        }
    }
    echo trim($list, ',');
}



include_once 'include/iz_function.php';