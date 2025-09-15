<?php
/*
Plugin Name: Scroll to Top Btn
Plugin URI: https://github.com/luknij-lab/Scroll-to-top-btn
Description: A button that scrolls the page to the very top.
Version: 1.1
Author: Luknij Design Łukasz Szozda
Author URI: https://www.luknij-design.pl/
License: MIT License
*/

// Registering Scroll to Top module styles and scripts
function scroll_top_enqueue_assets() {
    wp_enqueue_style(
        'scroll-top-style',
        get_stylesheet_directory_uri() . '/assets/scroll-top/scroll-top.css',
        array(),
        '1.1.0'
    );
    wp_enqueue_script(
        'scroll-top-script',
        get_stylesheet_directory_uri() . '/assets/scroll-top/scroll-top.js',
        array(),
        '1.1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'scroll_top_enqueue_assets');

// Adding a button to the footer
function scroll_top_button_markup() {
    echo '<button id="scrollTopBtn" class="btn-top" aria-label="Przewiń do góry">
		<span class="arrow-up"></span>
	</button>';
}
add_action('wp_footer', 'scroll_top_button_markup');
