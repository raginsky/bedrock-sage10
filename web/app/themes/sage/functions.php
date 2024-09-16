<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Custom Admin Styles
|--------------------------------------------------------------------------
|
| This function will allow us to add custom styles to the WordPress
| admin area.
|
*/  

function custom_admin_styles() {
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/resources/styles/admin-style.css');
}
add_action('admin_enqueue_scripts', 'custom_admin_styles');


/*
|--------------------------------------------------------------------------
| Custom Admin StylesOverride _admin_bar_bump_cb - a default callback for WP_Admin_Bar
|--------------------------------------------------------------------------
|
|  Prevents WP from adding a margin on top of page when logged in. 
|  (Adding a dummy function as it has to contain something – WordPress adds the default one if callback is empty)
|  https://mattr.co.uk/remove-wp-admin-bar-inline-css-from-head
|
*/

add_theme_support('admin-bar', ['callback' => function() {} ]);