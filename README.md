# Scroll-to-top-btn
A button that scrolls the page to the very top.

## Contents

theme-child/
├── functions.php
├── inc/
│   └── scroll-top.php
└── assets/
    └── scroll-top/
        ├── scroll-top.css
        └── scroll-top.js

## Explanation

inc/scroll-top.php – contains the PHP code responsible for integrating the module with WordPress: registering CSS/JS files and adding a button in the footer using the wp_footer hook.

assets/scroll-top/ – stores the module's static resources: CSS and JavaScript files. This keeps all styles and scripts in one place and makes them easy to manage.

functions.php – loads the module using ```require_once get_stylesheet_directory() . '/inc/scroll-top.php';```.

## Installing the Module

1. Copy the inc/scroll-top.php directory and the assets/scroll-top/ directory to your child theme.i
2. In the child theme's functions.php file, add:

```require_once get_stylesheet_directory() . '/inc/scroll-top.php';```

3. In the inc/scroll-top.php file, load styles and scripts and button structure:

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

4. Gotowe – przycisk pojawi się na stronie i będzie działał dzięki plikom scroll-top.css oraz scroll-top.js
