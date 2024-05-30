<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;
use App\Fields\PageBuilder;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
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

        add_action('acf/init', function () {
            acf_add_local_field_group(PageBuilder::getFields()->build());
        });
    }
}