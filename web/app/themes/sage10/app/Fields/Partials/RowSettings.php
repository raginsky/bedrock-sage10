<?php
namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$row_settings = new FieldsBuilder( 'row_settings' );

$row_settings
    ->addGroup('settings')
        ->setWidth(13)
        
        // Column MD Width
        ->addSelect('column_md_width', [
            'allow_null' => 1,
            'choices'    => [
                'col-md-2'  => '8%',
                'col-md-3'  => '12%',
                'col-md-4'  => '16%',
                'col-md-5'  => '20%',
                'col-md-6'  => '25%',
                'col-md-7'  => '30%',
                'col-md-8'  => '33%',
                'col-md-9'  => '37%',
                'col-md-10' => '41%',
                'col-md-11' => '45%',
                'col-md-12' => '50%',
                'col-md-13' => '55%',
                'col-md-14' => '59%',
                'col-md-15' => '63%',
                'col-md-16' => '67%',
                'col-md-17' => '70%',
                'col-md-18' => '75%',
                'col-md-19' => '80%',
                'col-md-20' => '84%',
                'col-md-21' => '88%',
                'col-md-22' => '92%',
            ]
        ])
        
        // Column LG Width
        ->addSelect('column_lg_width', [
            'allow_null' => 1,
            'choices'    => [
                'col-lg-2'  => '8%',
                'col-lg-3'  => '12%',
                'col-lg-4'  => '16%',
                'col-lg-5'  => '20%',
                'col-lg-6'  => '25%',
                'col-lg-7'  => '30%',
                'col-lg-8'  => '33%',
                'col-lg-9'  => '37%',
                'col-lg-10' => '41%',
                'col-lg-11' => '45%',
                'col-lg-12' => '50%',
                'col-lg-13' => '55%',
                'col-lg-14' => '59%',
                'col-lg-15' => '63%',
                'col-lg-16' => '67%',
                'col-lg-17' => '70%',
                'col-lg-18' => '75%',
                'col-lg-19' => '80%',
                'col-lg-20' => '84%',
                'col-lg-21' => '88%',
                'col-lg-22' => '92%',
            ]
        ])
        
        // Hide On
        ->addSelect('hide_on', [
            'allow_null' => 1,
            'choices'    => ['Mobile', 'Desktop']
        ])
        
    ->endGroup();

return $row_settings;