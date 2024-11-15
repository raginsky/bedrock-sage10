<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$padding = new FieldsBuilder( 'padding' );
$padding    
    ->addSelect('padding_top', [
        'label'       => 'Top Padding',
        'allow_null'  => 1,
        'choices'     => [
            'padding-top-lg' => 'Large [xs:80px / lg:120px]',
            'padding-top-md' => 'Normal [xs:50px / lg:60px]',
            'padding-top-sm' => 'Small [xs:40px / lg:50px]',
            'padding-top-none' => 'No padding'
        ],
        'wrapper'     => [
            'width' => 15
        ]
    ])
    ->addSelect('padding_bottom', [
        'label'       => 'Bottom Padding',
        'allow_null'  => 1,
        'choices'     => [
            'padding-bottom-lg' => 'Large [xs:80px / lg:120px]',
            'padding-bottom-md' => 'Normal [xs:50px / lg:60px]',
            'padding-bottom-sm' => 'Small [xs:40px / lg:50px]',
            'padding-bottom-none' => 'No padding'
        ],
        'wrapper'     => [
            'width' => 15
        ]
    ]);

return $padding;