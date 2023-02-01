<?php

function eterna_files()
{
    wp_enqueue_style('eterna_stylesheet', get_theme_file_uri('/assets/styles/styles.css'));
    wp_enqueue_script('eterna_hamburger', get_theme_file_uri('/assets/js/hamburger2.js'), NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'eterna_files');


function eterna_features()
{
    register_nav_menu('mobileNavMenu', 'Mobile Nav Menu');
    register_nav_menu('desktopNavMenu', 'Desktop Nav Menu');
}

add_action("after_setup_theme", 'eterna_features');
