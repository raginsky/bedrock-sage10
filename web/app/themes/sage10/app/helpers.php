<?php

if (!function_exists('get_field_partial')) {
    function get_field_partial($partial, $width = 100) {
        // Replace '.' with '/'
        $partial = str_replace('.', '/', $partial);
        
        // Capitalize each part of the namespace correctly
        $partial = ucwords($partial, '/');
    
        // Include the partial file
        return include get_template_directory() . "/app/Fields/{$partial}.php";
    }
}

if (!function_exists('layout')) {
    function layout()
    {
        return preg_replace('/_/', '-', get_row_layout());
    }
}

class_alias('App\View\Composers\Page', 'Page');