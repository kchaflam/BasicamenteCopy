<?php

function LoadTitle()
{
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "LoadTitle");

### HEADER FUNCTIONS ###
function LoadStyles()
{
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), "5.0.1", "all");
    wp_enqueue_style("main-style", get_template_directory_uri() . "/style.css", array(), wp_get_theme()->get("Version"), "all");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), "5.15.3", "all");
}
add_action("wp_enqueue_scripts", "LoadStyles");

function LoadScripts()
{
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.6.0.slim.min.js", array(), "3.6.0", true);
    wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), "2.9.2", true);
    wp_enqueue_script("bootstrap-script", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js", array(), "5.0.1", true);
    wp_enqueue_script("main-script", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}
add_action("wp_enqueue_scripts", "LoadScripts");

### NAVBAR FUNCTIONS ###
function wpb_custom_new_menu()
{
    register_nav_menu('Header', __('Header Menu'));
}
add_action('init', 'wpb_custom_new_menu');

//https://wordpress.stackexchange.com/questions/156165/add-custom-classes-to-anchor-in-wp-nav-menu
function wpse156165_menu_add_class($atts, $item, $args)
{
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}
add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

//https://stackoverflow.com/questions/14464505/how-to-add-class-in-li-using-wp-nav-menu-in-wordpress
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

class My_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"mp-level\">\n";
    }
}

add_theme_support('post-thumbnails');
