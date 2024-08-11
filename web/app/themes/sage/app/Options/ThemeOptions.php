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

        // Footer Tab
        $themeOptions->addTab('Footer', [
            'placement' => 'top',
        ]);

        // Social Media Links
        $themeOptions->addFields( get_field_partial( 'layouts.footerContent' ) );

        // Meta Information Tab
        $themeOptions->addTab('Meta', [
            'placement' => 'top',
        ]);

        // Meta Fields
        $themeOptions->addText('meta_title', [
            'label' => 'Meta Title',
        ]);
        $themeOptions->addText('meta_description', [
            'label' => 'Meta Description',
        ]);
        $themeOptions->addText('meta_image', [
            'label' => 'Meta Image',
        ]);
        $themeOptions->addText('meta_url', [
            'label' => 'Meta URL',
        ]);
        $themeOptions->addText('meta_type', [
            'label' => 'Meta Type',
        ]);

        // Return the built field group
        return $themeOptions->build();
    }
}