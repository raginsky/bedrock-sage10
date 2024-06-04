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
            'id' => $this->id(),
            'gap' => $this->gap(),
            'bg' => $this->bg(),
            'bgImage' => $this->bgImage(),
            'bgImageAlign' => $this->bgImageAlign(),
            'bgImageSize' => $this->bgImageSize(),
            'alignCenter' => $this->alignCenter(),
            'textColor' => $this->textColor(),
            'moduleAttr' => $this->moduleAttr(),
            'linkTarget' => $this->linkTarget(),
        ];
    }

    public static function id()
    {
        $title = get_sub_field('title');
        $id = $title ? strtolower(preg_replace('/[-\s]/', '_', $title)) : '';
    
        return $id ? "id='{$id}' " : '';
    }
    
    public static function gap()
    {
        $gap = get_sub_field('gap');
        switch ($gap) {
            case 'small-gap':
                return ' gap-2';
            case 'normal-gap':
                return ' gap-4';
            case 'large-gap':
                return ' gap-8';
            case 'no-gap-top':
                return ' pt-0';
            case 'no-gap-bottom':
                return ' pb-0';
            case 'no-gap':
                return ' p-0';
            default:
                return '';
        }
    }
    
    public static function bg()
    {
        return ($bg = get_sub_field('background')) ? ' acf-bg-' . $bg : '';
    }
    

    public static function bgImage()
    {
        $bg_image = get_sub_field('bg_image');
        $bg_image_sm = get_sub_field('bg_image_sm');
    
        if ($bg_image && $bg_image_sm) {
            return '<div class="acf-bg-image bg-cover bg-no-repeat xl:hidden" style="background-image:url(' . esc_url($bg_image_sm) . ')"></div>' .
                   '<div class="acf-bg-image bg-cover bg-no-repeat hidden xl:block" style="background-image:url(' . esc_url($bg_image) . ')"></div>';
        }
    
        $bg_image = $bg_image ?: $bg_image_sm;
    
        return $bg_image ? '<div class="acf-bg-image bg-cover bg-no-repeat" style="background-image:url(' . esc_url($bg_image) . ')"></div>' : '';
    }    
    
    public static function bgImageAlign()
    {
        $align = get_sub_field('bg_align');
        switch ($align) {
            case 'right-top':
                return ' bg-right-top';
            case 'right-center':
                return ' bg-right';
            case 'right-bottom':
                return ' bg-right-bottom';
            case 'left-top':
                return ' bg-left-top';
            case 'left-center':
                return ' bg-left';
            case 'left-bottom':
                return ' bg-left-bottom';
            case 'center-top':
                return ' bg-center-top';
            case 'center-center':
                return ' bg-center';
            case 'center-bottom':
                return ' bg-center-bottom';
            default:
                return ' bg-center';
        }
    }
    
    public static function bgImageSize()
    {
        $size = get_sub_field('bg_size');
        switch ($size) {
            case 'cover':
                return ' bg-cover';
            case 'contain':
                return ' bg-contain';
            default:
                return '';
        }
    }
    
    public static function alignCenter()
    {
        return get_sub_field('align_center') ? ' text-center' : '';
    }
    
    public static function textColor()
    {
        return ($text_color = get_sub_field('text_color')) ? ' acf-text-color-' . $text_color : '';
    }

    public static function linkTarget()
    {
        $link_target = get_sub_field('target');
    
        $targets = [
            'blank' => 'target=_blank',
            'self' => 'target=_self',
            'download' => 'download'
        ];
    
        return $targets[$link_target] ?? 'target=_blank';
    }
    
    public static function moduleAttr()
    {
        return self::gap() .
            self::bg() .
            self::bgImageAlign() .
            self::bgImageSize() .
            self::alignCenter() .
            self::textColor();
    }
      
    private static function esc_url($url)
    {
        return filter_var($url, FILTER_SANITIZE_URL);
    }
}