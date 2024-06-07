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
return "<?php if (get_sub_field('container') === 'large') : ?>
<div class=\"acf-<?= layout() ?>__container max-w-container-lg mx-auto px-container\">
    <?php elseif (get_sub_field('container') === 'medium') : ?>
    <div class=\"acf-<?= layout() ?>__container max-w-container-md mx-auto px-container\">
        <?php elseif (get_sub_field('container') === 'none') : ?>
        NONE
        <div class=\"max-w-full mx-auto px-container\">
            <?php endif; ?>";
            });

            Blade::directive('endcontainer', function () {
            return "<?php if (get_sub_field('container')) : ?>
        </div>
        <?php endif; ?>";
        });

        }}