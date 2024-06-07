<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$button = new FieldsBuilder('button');

$button
    // Button Label
    ->addText('button_label', [
        'wrapper' => [
            'width' => 16,
        ],
    ])

    // Page URL
    ->addLink('page_url', [
        'label' => 'Page URL',
        'return_format' => 'url',
        'wrapper' => [
            'width' => 20,
        ],
    ])

    ->addSelect('target', [
        'label' => 'Link Target',
        'choices' => [
            '_self' => 'Same Tab',
            '_blank' => 'New Tab',
        ],
        'default_value' => '_self',
        'wrapper' => [
            'width' => 30,
        ],
    ])

    // Button Class
    ->addSelect('class', [
        'allow_null' => 1,
        'choices'    => ['Primary', 'Secondary', 'Outline'],
        'default_value' => 'primary',
        'wrapper' => ['width' => 16]
    ])

    // Margin Bottom
    ->addSelect('margin_bottom', [
        'allow_null' => 1,
        'choices'    => ['small', 'normal', 'large'],
        'wrapper'    => ['width' => 16]
    ]);

return $button;