<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * Define the option page fields.
     *
     * @return array
     */
    public function fields(): array
    {
        // Initialize the field group
        $themeOptions = Builder::make('theme_options');

        // Header Tab
        $themeOptions->addTab('Header', [
            'placement' => 'top',
        ]);

        // Site Logo
        $themeOptions
            ->addImage('site_logo', [
                'label' => 'Site Logo',
                'instructions' => 'Upload the site logo.',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'wrapper' => [
                    'width' => '50',
                ],
            ]);

        // Footer Tab
        $themeOptions->addTab('Footer', [
            'placement' => 'top',
        ]);

        // Social Media Links
        $themeOptions->addFields( get_field_partial( 'layouts.footerContent' ) );

        // Return the built field group
        return $themeOptions->build();
    }
}