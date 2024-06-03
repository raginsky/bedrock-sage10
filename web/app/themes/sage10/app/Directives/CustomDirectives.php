<?php

namespace App\Directives;

use App;
use App\View\Composers\Page;
use Illuminate\Support\Facades\Blade;

class CustomDirectives {
public static function register(): void {
        
Blade::directive('wrapper', function () {
return layout()
? "<section <?php echo Page::id(); ?> class=\"acf-" . layout() . "<?php echo Page::moduleAttr(); ?>\">"
: '';
});

Blade::directive('endwrapper', function () {
return layout() ? "</section>" : '';
});

Blade::directive('container', function () {
return "<?= get_sub_field('container') ? '<div class=\"acf-" . layout() . "__container container\">' : '' ?>";
});

Blade::directive('endcontainer', function () {
return "<?= get_sub_field('container') ? '</div>' : '' ?>";
});

Blade::directive('svg', function ($id) {
return "<svg class=\"svg-{$id}\">
    <use xlink:href=\"#{$id}\" />
</svg>";
});


}}