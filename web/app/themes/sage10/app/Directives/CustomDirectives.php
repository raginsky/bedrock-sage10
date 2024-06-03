<?php

namespace App\Directives;

use App;
use App\View\Composers\Page;
use Illuminate\Support\Facades\Blade;

class CustomDirectives
{
    public static function register(): void
    {
        Blade::directive('acfmodule', function ($tag) {
            empty($tag) ? $tag = 'section' : $tag = $tag;
            if (layout()) {
                return "<{$tag} <?= Page::id(); ?>" . ' class="acf-' . layout() .
"<?= Page::moduleAttr(); ?>";
}
return '';
});

Blade::directive('endacfmodule', function ($tag) {
empty($tag) ? $tag = 'section' : $tag = $tag;
if (layout()) {
return "</{$tag}>";
}
return '';
});

Blade::directive('container', function ($classPrefix) {
$containerClass = $classPrefix ? $classPrefix : 'acf-' . layout();

return "<?= get_sub_field('has_container') ? '<div class=\"{$containerClass}__container container\">' : '' ?>";
});

Blade::directive('endcontainer', function ($tag) {
return "<?= get_sub_field('has_container') ? '</div>' : '' ?>";
});

Blade::directive('svg', function ($id) {
return "<svg class=\" svg-{$id}\">
    <use xlink:href=\"#{$id}\" />
</svg>";
});
}
}