<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include(get_template_directory() . "/app/Fields/Partials/Config.php");

$settings = new FieldsBuilder('settings');

$settings
    // Settings Tab
    ->addTab('settings', ['placement' => 'left'])

    // Container Option
    ->addTrueFalse('container', [
        'label'       => 'Container',
        'ui'          => 1,
        'ui_on_text'  => 'Container',
        'ui_off_text' => 'No Container',
        'default_value' => 1
    ])->setWidth(15)

    // Gap Option
    ->addSelect('gap', [
        'label'       => 'Gap',
        'allow_null'  => 1,
        'choices'     => [
            'normal-gap'    => 'Normal Gap',
            'large-gap'     => 'Large Gap',
            'small-gap'     => 'Small Gap',
            'no-gap-top'    => 'No Gap Top',
            'no-gap-bottom' => 'No Gap Bottom',
            'no-gap'        => 'No Gap'
        ],
        'default_value' => 'normal-gap'
    ])->setWidth(15)

    // Background Color Option
    ->addRadio('background', [
        'label'       => 'Background Color',
        'allow_null'  => 1,
        'choices'     => $global_config->bg_color_pallet,
        'wrapper'     => ['width' => 15]
    ])->setSelector('.color-selector')

    // Text Color Option
    ->addRadio('text_color', [
        'label'       => 'Text Color',
        'allow_null'  => 1,
        'choices'     => $global_config->text_color_pallet,
        'wrapper'     => ['width' => 15]
    ])->setSelector('.color-selector')

    // Background Image Option
    ->addImage('bg_image', [
        'label'         => 'Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url',
        'wrapper'       => ['width' => 25]
    ])

    // Small Background Image Option
    ->addImage('bg_image_sm', [
        'label'         => 'Small Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url',
        'wrapper'       => ['width' => 25]
    ])

    // Background Alignment Option
    ->addSelect('bg_align', [
        'label'       => 'Background Alignment',
        'allow_null'  => 1,
        'choices'     => [
            'right'  => 'Right',
            'left'   => 'Left',
            'bottom' => 'Bottom',
            'top'    => 'Top'
        ],
        'wrapper'     => ['width' => 25]
    ])

    // Background Size Option
    ->addSelect('bg_size', [
        'label'       => 'Background Size',
        'allow_null'  => 1,
        'choices'     => [
            'cover'   => 'Cover',
            'contain' => 'Contain'
        ],
        'wrapper'     => ['width' => 25]
    ]);

return $settings;