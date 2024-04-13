<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    
</head>
 
<body <?php body_class(); ?>>
<header className="mb-0">
<nav class="navbar navbar-expand-lg">
    <div class="container ">
        <a class="navbar-brand" href="<?= get_home_url() ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/itlogo.png" class="float-left mr-2" alt="IT Job Fair Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                $menu_items = wp_get_nav_menu_items('Primary Menu');

                foreach ($menu_items as $menu_item) {
                    echo '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>
</header>


<div class="container mt-0">
    <main>
       