<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include(get_template_directory() . "/app/Fields/Partials/Config.php");

$settings = new FieldsBuilder('settings');

$settings
    // Settings Tab
    ->addTab('settings', ['placement' => 'top'])

    // Section ID
    ->addText('title', [
        'label' => 'Section ID',
        'wrapper'     => ['width' => 20]
    ])

    // Background Images
    ->addImage('bg_image', [
        'label'         => 'Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url',
        'wrapper'     => ['width' => 25]
    ])
    ->addImage('bg_image_sm', [
        'label'         => 'Small Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url',
        'wrapper'     => ['width' => 25]
    ])

    // Background Size and Alignment
    ->addSelect('bg_size', [
        'label'       => 'Background Size',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 15]
    ])
    ->addChoices('cover', 'contain')
    ->addSelect('bg_align', [
        'label'       => 'Background Alignment',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 15]
    ])
    ->addChoices([
        'center-top'    => 'Center Top',
        'center-center' => 'Center Center',
        'center-bottom' => 'Center Bottom',
        'right-top'     => 'Right Top',
        'right-center'  => 'Right Center',
        'right-bottom'  => 'Right Bottom',
        'left-top'      => 'Left Top',
        'left-center'   => 'Left Center',
        'left-bottom'   => 'Left Bottom'
    ])

    // Alignment and Container
    ->addSelect('padding', [
        'label'       => 'Padding',
        'allow_null'  => 1,
        'choices'     => [
            'padding-lg' => 'Lg Padding [xs:100px / lg:200px]',
            'padding-md' => 'Md Padding [xs:50px / lg:100px]',
            'padding-sm' => 'Sm Padding [xs:40px / lg:50px]',
        ],
        'wrapper'     => [
            'width' => 15
        ]
    ])
    
    ->addTrueFalse('align_mobile_center', [
        'label'       => 'Align Mobile Text',
        'ui'          => 1,
        'ui_on_text'  => 'Center',
        'ui_off_text' => 'Left',
        'wrapper'     => ['width' => 15]
    ])

    ->addTrueFalse('align_center', [
        'label'       => 'Align Desktop Text',
        'ui'          => 1,
        'ui_on_text'  => 'Center',
        'ui_off_text' => 'Left',
        'wrapper'     => ['width' => 15]
    ])
    
    ->addSelect('container', [
        'label'       => 'Container',
        'wrapper'     => ['width' => 15],
        'choices'     => [
            'large'  => 'Large Container',
            'medium'   => 'Medium Container',
            'none' => 'No Container',
        ],
        'default_value' => 'medium',
        'ui'          => 1,
    ])

    // Background and Text Color
    ->addRadio('text_color', [
        'label'       => 'Text Color',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 25]
    ])
    ->setSelector( '.color-selector' )
    ->addChoices($global_config->text_color_pallet)
    ->addRadio('background', [
        'label'       => 'Background Color',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 15]
    ])
    ->setSelector( '.color-selector' )
    ->addChoices($global_config->bg_color_pallet);

return $settings;