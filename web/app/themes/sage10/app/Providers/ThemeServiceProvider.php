<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once get_template_directory() . '/app/helpers.php';
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $flexContent = include get_template_directory() . '/app/Fields/FlexContent.php';
        acf_add_local_field_group($flexContent->build());
    }
}