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
            'alignCenter' => $this->alignCenter(),
            'alignCenterMobile' => $this->alignCenterMobile(),
            'textColor' => $this->textColor(),
            'moduleAttr' => $this->moduleAttr(),
        ];
    }

    public static function id()
    {
        $title = get_sub_field('title');
        $id = $title ? strtolower(preg_replace('/[-\s]/', '_', $title)) : '';
    
        return $id ? "id='{$id}' " : '';
    }

    public static function bg()
    {
        $background = get_sub_field('background');
        return $background ? ' acf-bg-' . $background : '';
    }
    
    public static function bgImageAlign()
    {
        $align = get_sub_field('bg_align');
        $alignments = [
            'right-top' => 'bg-right-top',
            'right-center' => 'bg-right',
            'right-bottom' => 'bg-right-bottom',
            'left-top' => 'bg-left-top',
            'left-center' => 'bg-left',
            'left-bottom' => 'bg-left-bottom',
            'center-top' => 'bg-center-top',
            'center-center' => 'bg-center',
            'center-bottom' => 'bg-center-bottom',
        ];

        return isset($alignments[$align]) ? ' ' . $alignments[$align] : ' bg-center';
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

    public static function bgImage()
    {
        $bg_image = get_sub_field('bg_image');
        $bg_image_sm = get_sub_field('bg_image_sm');
        $bg_align = self::bgImageAlign();
        $bg_size = self::bgImageSize();
        $bg_classes = 'acf-bg-image bg-no-repeat' . $bg_align . $bg_size;

        if ($bg_image && $bg_image_sm) {
            return '<div class="' . $bg_classes . ' xl:hidden" style="background-image:url(' . esc_url($bg_image_sm) . ')"></div>' .
                '<div class="' . $bg_classes . ' hidden xl:block" style="background-image:url(' . esc_url($bg_image) . ')"></div>';
        }

        $bg_image = $bg_image ?: $bg_image_sm;

        return $bg_image ? '<div class="' . $bg_classes . '" style="background-image:url(' . esc_url($bg_image) . ')"></div>' : '';
    }

    
    public static function alignCenter()
    {
        return get_sub_field('align_center') ? ' lg:text-center' : '';
    }

    public static function alignCenterMobile()
    {
        return get_sub_field('align_mobile_center') ? ' text-center-mobile' : '';
    }
    
    public static function textColor()
    {
        return ($text_color = get_sub_field('text_color')) ? ' text-' . $text_color : '';
    }

    public static function padding()
    {
        $padding_top = get_sub_field('padding_top');
        $padding_bottom = get_sub_field('padding_bottom');
    
        $classes = '';

        if (!empty($padding_top)) {
            $classes .= ' acf-' . esc_attr($padding_top);
        }
    
        if (!empty($padding_bottom)) {
            $classes .= ' acf-' . esc_attr($padding_bottom);
        }
    
        return $classes;
    }   
    
    public static function moduleAttr()
    {
        return
            self::padding() .
            self::alignCenter() .
            self::alignCenterMobile() .
            self::textColor() .
            self::bg();
    }
      
    private static function esc_url($url)
    {
        return filter_var($url, FILTER_SANITIZE_URL);
    }
}