<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
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
            'siteName' => $this->siteName(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function layout() {
        return preg_replace( "(_)", '-', get_row_layout() );
    }

    public function mobileAlign() {
        $mobile_align = get_field( 'mobile_align' );

        if ( $mobile_align ) {
            return ' acfm-mobile-align';
        }

        return '';
    }

    public function bodyClasses() {
        return  self::mobileAlign();
    }
}