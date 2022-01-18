<!DOCTYPE html>
<html <?php language_attributes( 'en' ); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7d36cbdac9.js" crossorigin="anonymous"></script>
</head>
    <?php wp_head(); ?>
<body <?php body_class(); ?> >
    <!-- Header section starts here-->
    <header class="header">
        <div class="top-header">
            <div class="logo-section">
                <h1>AkExplains</h1>
                <p class="meta-entries-text">Just another WordPress site</p>
            </div>
            <div class="navicon-box">
                <button onclick="showNav()"> <i class="fas fa-bars"></i> </button>
            </div>
        </div>
        <?php 	wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
    </header>