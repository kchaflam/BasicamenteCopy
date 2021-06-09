<?php

function LoadTitle()
{
    add_theme_support("title-tag");
}

add_action("after_setup_theme", "LoadTitle");

function LoadStyles()
{
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), "5.0.1", "all");
    wp_enqueue_style("main-style", get_template_directory_uri() . "/style.css", array(), wp_get_theme()->get("Version"), "all");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), "5.15.3", "all");
}

add_action("wp_enqueue_scripts", "LoadStyles");

function LoadScripts()
{
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.6.0.slim.min.js", array(), "3.6.0");
    wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), "2.9.2");
    wp_enqueue_script("bootstrap-script", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js", array(), "5.0.1");
    wp_enqueue_script("main-script", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0");
}

add_action("wp_enqueue_scripts", "LoadScripts");
