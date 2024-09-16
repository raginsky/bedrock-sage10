<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$button = new FieldsBuilder('button');

$button
    // Page URL
    ->addLink('link', [
        'label' => 'URL Properties',
        'wrapper' => [
            'width' => 25,
        ],
    ])

    // Button Class
    ->addSelect('class', [
        'allow_null' => 1,
        'choices'    => [
            'primary' => 'Primary', 
            'secondary' => 'Secondary', 
            'outline' => 'Outline', 
            'outline-white' => 'Outline White',
        ],
        'default_value' => 'primary',
        'wrapper' => ['width' => 25]
    ])

    // Margin Bottom
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
    ]);

return $button;