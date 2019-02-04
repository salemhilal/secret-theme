<?php

function add_theme_scripts() {
    wp_enqueue_style( "style", "https://unpkg.com/tachyons/css/tachyons.min.css" );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );