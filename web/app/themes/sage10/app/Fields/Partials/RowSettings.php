<?php
namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$row_settings = new FieldsBuilder('row_settings');

$row_settings
    ->addGroup('settings')
        ->setWidth(13)
        
        // Column MD Width
        ->addSelect('column_md_width', [
            'allow_null' => 1,
            'choices'    => [
                1 => '8%',
                2 => '17%',
                3 => '25%',
                4 => '33%',
                5 => '42%',
                6 => '50%',
                7 => '58%',
                8 => '67%',
                9 => '75%',
                10 => '83%',
                11 => '92%',
                12 => '100%',
            ]
        ])
        
        // Column LG Width
        ->addSelect('column_lg_width', [
            'allow_null' => 1,
            'choices'    => [
                1 => '8%',
                2 => '17%',
                3 => '25%',
                4 => '33%',
                5 => '42%',
                6 => '50%',
                7 => '58%',
                8 => '67%',
                9 => '75%',
                10 => '83%',
                11 => '92%',
                12 => '100%',
            ]
        ])
        
        // Hide On
        ->addSelect('hide_on', [
            'allow_null' => 1,
            'choices'    => ['Mobile', 'Desktop']
        ])
        
    ->endGroup();

return $row_settings;