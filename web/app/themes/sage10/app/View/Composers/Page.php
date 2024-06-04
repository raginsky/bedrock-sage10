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
        return ($gap = get_sub_field('gap')) ? ' acf-' . $gap : '';
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
            return '<div class="acf-bg-image acf-bg-image--sm" style="background-image:url(' . esc_url($bg_image_sm) . ')"></div>' .
                   '<div class="acf-bg-image acf-bg-image--md" style="background-image:url(' . esc_url($bg_image) . ')"></div>';
        }
    
        $bg_image = $bg_image ?: $bg_image_sm;
    
        return $bg_image ? '<div class="acf-bg-image" style="background-image:url(' . esc_url($bg_image) . ')"></div>' : '';
    }
    
    public static function bgImageAlign()
    {
        return ($align = get_sub_field('bg_align')) ? ' acf-bg-image--align-' . $align : '';
    }
    
    public static function bgImageSize()
    {
        return ($size = get_sub_field('bg_size')) ? ' acf-bg-image--size-' . $size : '';
    }
    
    public static function alignCenter()
    {
        return get_sub_field('align_center') ? ' acf-text-align-center' : '';
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