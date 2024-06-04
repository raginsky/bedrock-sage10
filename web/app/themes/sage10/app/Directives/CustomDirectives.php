<?php

namespace App\Directives;

use App;
use App\View\Composers\Page;
use Illuminate\Support\Facades\Blade;

class CustomDirectives {
public static function register(): void {
        
Blade::directive('wrapper', function ($tag) {
    empty($tag) ? ($tag = 'section') : ($tag = $tag);
return layout()
? "<{$tag} <?php echo Page::id(); ?> class=\"acf-" . layout() . "<?php echo Page::moduleAttr(); ?>\">"
: '';
});

Blade::directive('endwrapper', function ($tag) {
empty($tag) ? ($tag = 'section') : ($tag = $tag);
return layout() ? "</{$tag}>" : '';
});

Blade::directive('container', function () {
return "<?= get_sub_field('container') ? '<div class=\"acf-" . layout() . "__container container\">' : '' ?>";
});

Blade::directive('endcontainer', function () {
return "<?= get_sub_field('container') ? '</div>' : '' ?>";
});
}}