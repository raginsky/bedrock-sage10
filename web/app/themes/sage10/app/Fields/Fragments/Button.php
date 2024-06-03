<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$button = new FieldsBuilder('button');

$button
    // Button Label
    ->addText('button_label', [])
    ->setWidth(16)

    // Page URL
    ->addPageLink('page_url', [
        'label'          => 'Page URL',
        'post_type'      => ['page'],
        'allow_archives' => 0,
        'allow_null'     => 1,
        'wrapper'        => ['width' => 16]
    ])

    // Custom URL
    ->addText('url', [
        'label'   => 'URL',
        'wrapper' => ['width' => 16]
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