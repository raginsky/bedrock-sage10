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
        $themeOptions
            ->addRepeater('social_media', [
                'label' => 'Social Media Links',
                'button_label' => 'Add Social Media Link',
                'layout' => 'block',
            ])
                ->addText('platform', [
                    'label' => 'Platform',
                    'instructions' => 'Enter the social media platform (e.g., Facebook, Twitter).',
                    'wrapper' => [
                        'width' => '50',
                    ],
                ])
                ->addUrl('url', [
                    'label' => 'URL',
                    'instructions' => 'Enter the URL to your social media profile.',
                    'wrapper' => [
                        'width' => '50',
                    ],
                ])
            ->endRepeater();


        $themeOptions
        ->addColorPicker('primary_color', [
            'label' => 'Primary Color',
            'instructions' => 'Select the primary color for the site.',
            'wrapper' => [
                'width' => '25',
            ],
        ]);

    $themeOptions
        ->addColorPicker('secondary_color', [
            'label' => 'Secondary Color',
            'instructions' => 'Select the secondary color for the site.',
            'wrapper' => [
                'width' => '25',
            ],
        ]);

        // Custom Footer Text
        $themeOptions
            ->addWysiwyg('footer_text', [
                'label' => 'Footer Text',
                'instructions' => 'Enter custom text for the site footer.',
                'media_upload' => 0,
                'toolbar' => 'basic',
                'wrapper' => [
                    'width' => '100',
                ],
            ]);

        // Return the built field group
        return $themeOptions->build();
    }
}