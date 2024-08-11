<?php
namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$row_settings = new FieldsBuilder('row_settings');

$row_settings
        ->addGroup('settings')
        ->setWidth(13)

        // Column MD Width
        ->addRange('column_md_width', [
            'label' => 'Column MD Width',
            'min' => 1,
            'max' => 100,
            'step' => 1,
            'default_value' => 100,
        ])

        // Column LG Width
        ->addRange('column_lg_width', [
            'label' => 'Column LG Width',
            'min' => 1,
            'max' => 100,
            'step' => 1,
            'default_value' => 50,
        ])
        
        // Hide On
        ->addSelect('hide_on', [
            'allow_null' => 1,
            'choices'    => ['Mobile', 'Desktop']
        ])
        
    ->endGroup();

return $row_settings;