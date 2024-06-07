<?php
namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$row_settings = new FieldsBuilder('row_settings');

// Values mapped to Tailwind classes
$width_choices = [
    '8%' => 'w-1/12',
    '17%' => 'w-2/12',
    '25%' => 'w-3/12',
    '33%' => 'w-4/12',
    '42%' => 'w-5/12',
    '50%' => 'w-6/12',
    '58%' => 'w-7/12',
    '67%' => 'w-8/12',
    '75%' => 'w-9/12',
    '83%' => 'w-10/12',
    '92%' => 'w-11/12',
    '100%' => 'w-12/12',
];

$row_settings
        ->addGroup('settings')
        ->setWidth(13)

        // Column MD Width
        ->addSelect('column_md_width', [
            'allow_null' => 1,
            'choices'    => array_flip($width_choices) 
        ])

        // Column LG Width
        ->addSelect('column_lg_width', [
            'allow_null' => 1,
            'choices'    => array_flip($width_choices) 
        ])
        
        // Hide On
        ->addSelect('hide_on', [
            'allow_null' => 1,
            'choices'    => ['Mobile', 'Desktop']
        ])
        
    ->endGroup();

return $row_settings;