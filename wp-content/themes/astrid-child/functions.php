<?php
/**
 * Astrid functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astrid
 */

 add_action( 'wp_enqueue_scripts', 'enqueue_astrid_styles' );
 function enqueue_astrid_styles() {
     wp_enqueue_style( 'astrid-style', get_template_directory_uri().'/style.css' );
 }

 