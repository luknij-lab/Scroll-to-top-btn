# Scroll to Top Button for Wordpress
A lightweight and simple Scroll to Top button for WordPress. This module adds an elegant, customizable button for quickly returning to the top of the page.

Designed with performance and simplicity in mind, it requires no external libraries. CSS and JavaScript code are minimized for fast loading and no impact on Core Web Vitals.

<div align="center">
	<img src="/media/scroll-top.gif" alt="Button normal state" />
	<img src="/media/scroll-top-hover.gif" alt="Button hover state" />
</div>

## Contents

```
theme-child/
├── functions.php
├── inc/
│   └── scroll-top.php
└── assets/
    └── scroll-top/
        ├── scroll-top.css
        └── scroll-top.js
```

## Explanation

inc/scroll-top.php – contains the PHP code responsible for integrating the module with WordPress: registering CSS/JS files and adding a button in the footer using the wp_footer hook.

The inc/scroll-top.php file, load styles, scripts and button structure:

```
// Registering Scroll to Top module styles and scripts
function scroll_top_enqueue_assets() {
    wp_enqueue_style(
        'scroll-top-style',
        get_stylesheet_directory_uri() . '/assets/scroll-top/scroll-top.css',
        array(),
        '1.0.0'
    );
    wp_enqueue_script(
        'scroll-top-script',
        get_stylesheet_directory_uri() . '/assets/scroll-top/scroll-top.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'scroll_top_enqueue_assets');

// Adding a button to the footer
function scroll_top_button_markup() {
    echo '<button id="scrollTopBtn" class="scroll-top-btn">↑</button>';
}
add_action('wp_footer', 'scroll_top_button_markup');
```

assets/scroll-top/ – stores the module's static resources: CSS and JavaScript files. This keeps all styles and scripts in one place and makes them easy to manage.

functions.php – loads the module using ```require_once get_stylesheet_directory()```. Remember if you are using original template change ```get_stylesheet_directory()``` to ```get_template_directory()``` in functions.php and .css, .js files.

## Installing the Module

1. Copy the inc/scroll-top.php file to the inc/ directory to your child theme.
2. Copy assets/scroll-top/ directory to your child-theme.
3. Run inc/scroll-top.php file by adding below line of code to the functions.php file:

```require_once get_stylesheet_directory() . '/inc/scroll-top.php';```

4. Done – The button will appear on the website and will be working thanks to scroll-top.css and scroll-top.js files.





