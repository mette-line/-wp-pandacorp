<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php wp_body_open(); ?>

	<div id="site-header">
        <div class="site-branding">
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
            <?php do_action('pandacorp_custom_logo_setup'); ?>
        </div>
        <div class="site-navigation">
            <!-- WP Navigation -->
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <!-- Burger menu -->
            <div class="site-burger-navigation">   
                <a class="toggle-nav" href="#" onclick="pandacorpBurgerToggle()"  aria-label="Menu Button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <?php wp_nav_menu( array( 'theme_location' => 'burger-menu' ) ); ?>  
            </div> 
        </div>
	</div>

	<div id="content" class="site-content">
        <?php get_the_content();?>
