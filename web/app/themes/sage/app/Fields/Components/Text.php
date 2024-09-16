<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include(get_template_directory() . "/app/Fields/Partials/Config.php");

$text = new FieldsBuilder('text');

$text
    // Content Tab
    ->addTab('Content')
    ->addWysiwyg('text')

    // Settings Tab
    ->addTab('Settings')
    ->addSelect('size', [
        'label'       => 'Size',
        'allow_null'  => 1,
        'choices'     => [
            'xs' => 'Extra Small',
            'sm' => 'Small',
            'md' => 'Medium',
            'lg' => 'Large',
            'xl' => 'Extra Large',
        ],
        'wrapper'     => ['width' => 15]
    ])
    ->addRadio('color', [
        'label'       => 'Color',
        'allow_null'  => 1,
        'choices'     => $global_config->text_color_pallet,
        'wrapper'     => ['width' => 25]
    ])
    ->setSelector( '.color-selector' )
    ->addSelect('margin_bottom', [
        'label'       => 'Margin Bottom',
        'allow_null'  => 1,
        'choices'     => [
            'xs'  => 'Small [8px]',
            'sm' => 'Normal [16px]',
            'md'  => 'Medium [24px]',
            'lg' => 'Large [32px]',
            'xl' => 'Extra Large [40px]'
        ],
        'wrapper'     => ['width' => 14]
    ])

    ->addTrueFalse('contained', [
        'label'       => 'Fixed Width',
        'ui'          => 1,
        'ui_on_text'  => 'Fixed',
        'ui_off_text' => 'Full',
        'wrapper'     => ['width' => 15]
    ]);

return $text;