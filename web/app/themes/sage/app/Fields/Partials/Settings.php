<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$settings = new FieldsBuilder('settings');

$settings
    ->addTab('settings', ['placement' => 'top'])
    ->addText('title', [
        'label' => 'Section ID',
        'wrapper'     => ['width' => 20]
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

    ->addFields(get_field_partial('fragments.background'))
    ->addFields(get_field_partial('fragments.padding'))
    ->addFields(get_field_partial('fragments.alignment'))
    ->addFields(get_field_partial('fragments.colors'));

return $settings;