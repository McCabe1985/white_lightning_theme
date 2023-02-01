<!DOCTYPE html>
<html lang="en">

<?php $navMenuOpen = false; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <?php wp_head(); ?>
</head>

<body>
    <nav class="nav-container">
        <a href="/" class="nav-logo-wrapper">
            <img src="<?php echo get_theme_file_uri("/assets/images/svg/placeholder_white.svg"); ?>" height="38.7" width="38.7" alt="logo" class="nav-logo">
        </a>

        <?php
        wp_nav_menu(array(
            "theme_location" => "desktopNavMenu"
        ));
        ?>

        <button class="hamburger-button nav-menu-closed">

        </button>

    </nav>

    <?php
    wp_nav_menu(array(
        "theme_location" => "mobileNavMenu"
    ));
    ?>