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
        ])

        // Social Media Links
        ->addFields( get_field_partial( 'layouts.footerContent' ) )
        
        // Meta Information Tab
        ->addTab('Meta', [
            'placement' => 'top',
        ])
        
        // Analytics fields
        ->addTextarea( 'after_head_start', [ 'label' => 'After <b>head</b> start', 'rows' => '7', ] )
        ->addTextarea( 'after_body_start', [ 'label' => 'After <b>body</b> start', 'rows' => '7', ] )
        
        ->addFields( get_field_partial( 'partials.metaFields' ) )

        // Titles Repeater Tab
        ->addTab('Page Titles', [
            'placement' => 'top',
        ])
        ->addRepeater('custom_page_titles', [
            'label' => 'Custom Page Titles',
            'instructions' => 'Add custom titles for specific pages.',
            'layout' => 'block',
        ])
        ->addPostObject('target_page', [
            'label' => 'Target Page',
            'instructions' => 'Select the page for which this title should apply.',
            'return_format' => 'id', // Store the post ID
            'required' => 1,
            'post_type' => ['page'],
            'wrapper'     => ['width' => 50]
        ])
        ->addText('custom_title', [
            'label' => 'Custom Title',
            'instructions' => 'Enter the title to display on the frontend for this page.',
            'required' => 1,
            'wrapper'     => ['width' => 50]
        ])
        ->endRepeater();

        // Return the built field group
        return $themeOptions->build();
    }
}