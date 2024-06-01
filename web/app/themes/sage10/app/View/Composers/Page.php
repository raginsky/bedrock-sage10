<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pageLayout' => $this->pageLayout(),
            'id' => $this->id(),
            'padding' => $this->padding(),
            'bg' => $this->bg(),
            'bgImage' => $this->bgImage(),
            'bgImageAlign' => $this->bgImageAlign(),
            'bgImageSize' => $this->bgImageSize(),
            'alignCenter' => $this->alignCenter(),
            'textColor' => $this->textColor(),
            'moduleAttr' => $this->moduleAttr(),
            'rowOrReverse' => $this->rowOrReverse(),
            'verticalAlignment' => $this->verticalAlignment(),
            'justifyContent' => $this->justifyContent(),
            'linkTarget' => $this->linkTarget(),
        ];
    }

    public static function pageLayout()
    {
        return preg_replace('(_)', '-', get_row_layout());
    }

    public static function id()
    {
        $id = strtolower(preg_replace('(-| )', '_', get_sub_field('title')));
        if ($id) {
            return "id='{$id}' ";
        }

        return '';
    }

    public static function padding()
    {
        $padding = get_sub_field('padding');
        if ($padding) {
            return ' acfm-' . $padding;
        }

        return '';
    }

    public static function bg()
    {
        $bg = get_sub_field('background');
        if ($bg) {
            return ' acfm-bg-' . $bg;
        }

        return '';
    }

    public static function bgImage()
    {
        $bg_image = get_sub_field('bg_image');
        $bg_image_sm = get_sub_field('bg_image_sm');

        if ($bg_image && $bg_image_sm) {
            return '<div class="acfm-bg-image acfm-bg-image--sm" style="background-image:url(' . $bg_image_sm . ')"></div>' .
                '<div class="acfm-bg-image acfm-bg-image--md" style="background-image:url(' . $bg_image . ')"></div>';
        } elseif ($bg_image || $bg_image_sm) {
            $bg_image = $bg_image ?: $bg_image_sm;

            return '<div class="acfm-bg-image" style="background-image:url(' . $bg_image . ')"></div>';
        }

        return '';
    }

    public static function bgImageAlign()
    {
        $align = get_sub_field('bg_align');
        if ($align) {
            return ' acfm-bg-image--align-' . $align;
        }

        return '';
    }

    public static function bgImageSize()
    {
        $size = get_sub_field('bg_size');
        if ($size) {
            return ' acfm-bg-image--size-' . $size;
        }

        return '';
    }

    public static function alignCenter()
    {
        $align_center = get_sub_field('align_center');

        if ($align_center) {
            return ' acfm-text-align-center';
        }

        return '';
    }

    public static function textColor()
    {
        $text_color = get_sub_field('text_color');

        if ($text_color) {
            return ' acfm-text-color-' . $text_color;
        }

        return '';
    }

    public static function moduleAttr()
    {
        return self::padding() .
            self::bg() .
            self::bgImageAlign() .
            self::bgImageSize() .
            self::alignCenter() .
            self::textColor();
    }

    public static function rowOrReverse()
    {
        $reverse_columns = get_sub_field('reverse_columns');

        if ($reverse_columns) {
            return ' acfm-row--reverse-columns';
        }

        return ' acfm-row';
    }

    public static function verticalAlignment()
    {
        $alignment_stretch = get_sub_field('vertical_alignment');

        if ($alignment_stretch) {
            return ' acfm-row--align-stretch';
        }

        return ' acfm-row--align-center';
    }

    public static function justifyContent()
    {
        $rowAlignment = get_sub_field('justify_content');

        if ($rowAlignment) {
            return ' acfm-row--justify-' . $rowAlignment;
        }

        return '';
    }

    public static function linkTarget()
    {
        $link_target = get_sub_field('target');

        if ($link_target === 'blank') {
            return 'target=_blank';
        }
        if ($link_target === 'self') {
            return 'target=_self';
        }
        if ($link_target === 'download') {
            return 'download';
        }

        return 'target=_blank';
    }
}