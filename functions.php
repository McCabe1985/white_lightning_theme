<?php

function whitelightning_files()
{
    wp_enqueue_style('whitelightning_stylesheet', get_theme_file_uri('/assets/styles/styles.css'));
    wp_enqueue_script('whitelightning_hamburger', get_theme_file_uri('/assets/js/hamburger2.js'), NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'whitelightning_files');


function whitelightning_features()
{
    register_nav_menu('mobileNavMenu', 'Mobile Nav Menu');
    register_nav_menu('desktopNavMenu', 'Desktop Nav Menu');
}

add_action("after_setup_theme", 'whitelightning_features');

function whitelightning_post_types()
{
    register_post_type("team_member", array(
        "public" => true,
        "labels" => array(
            "name" => "Team Member"
        ),
        "menu_icon" => "dashicons-id-alt"
    ));
}

add_action("init", "whitelightning_post_types");
