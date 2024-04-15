<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php
        wp_head();
        $title = get_bloginfo("name");
        $header_items = wp_get_nav_menu_items("Header");
        $registration_items = wp_get_nav_menu_items("Registration");
    ?>
</head>
<body>
<header>
    <img id="logo" src="/wp-content/uploads/2024/04/10_year_orange_jobfair_logo-500.png" alt="Logo: IT Job Fair" />
    <div class="row">
        <?php foreach($header_items as $item) { ?>
            <a class="nav-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
        <?php } // end foreach ?>
    </div>
    <div class="row row-end">
        <div class="dropdown">
            <div class="dropdown-label">
                Registration
            </div>
            <div class="dropdown-content">
                <?php foreach($registration_items as $item) { ?>
                    <a class="drop-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                <?php } // end foreach ?>
            </div>
        </div>
        <a class="button white-button" href="/wp-admin">
            Admin
        </a>
    </div>
</header>
<main>