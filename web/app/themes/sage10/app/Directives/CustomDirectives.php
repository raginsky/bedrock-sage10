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
? "<{$tag} <?php echo Page::id(); ?> class=\"acf-" . layout() . " relative z-1 <?php echo Page::moduleAttr(); ?>\">"
: '';
});

Blade::directive('endwrapper', function ($tag) {
empty($tag) ? ($tag = 'section') : ($tag = $tag);
return layout() ? "</{$tag}>" : '';
});

Blade::directive('container', function () {
return "<?php if (get_sub_field('container') === 'large') : ?>
<div class=\"acf-<?= layout() ?>__container max-w-container-lg z-3 mx-auto w-full px-container flex flex-col\">
    <?php elseif (get_sub_field('container') === 'medium') : ?>
    <div class=\"acf-<?= layout() ?>__container max-w-container-md z-3 mx-auto w-full px-container flex flex-col\">
        <?php elseif (get_sub_field('container') === 'none') : ?>
        <div class=\"max-w-full mx-auto z-3 w-full px-container flex flex-col\">
            <?php endif; ?>";
            });

            Blade::directive('endcontainer', function () {
            return "<?php if (get_sub_field('container')) : ?>
        </div>
        <?php endif; ?>";
        });

        }}