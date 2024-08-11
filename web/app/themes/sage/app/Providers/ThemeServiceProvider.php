<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;
use App\Directives\CustomDirectives;


class ThemeServiceProvider extends SageServiceProvider
{

    protected array $directives = [
        CustomDirectives::class,
    ];
    
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

        collect($this->directives)
        ->filter(fn ($directive) => method_exists($directive, 'register'))
        ->each(fn ($directive) => $directive::register());

        $flexContent = include get_template_directory() . '/app/Fields/FlexContent.php';
        acf_add_local_field_group($flexContent->build());
    }
}