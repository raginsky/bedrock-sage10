<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$padding = new FieldsBuilder( 'padding' );
$padding    
    ->addSelect('padding_top', [
        'label'       => 'Top Padding',
        'allow_null'  => 1,
        'choices'     => [
            'padding-top-lg' => 'Large [xs:100px / lg:200px]',
            'padding-top-md' => 'Normal [xs:50px / lg:100px]',
            'padding-top-sm' => 'Small [xs:40px / lg:50px]',
        ],
        'wrapper'     => [
            'width' => 15
        ]
    ])
    ->addSelect('padding_bottom', [
        'label'       => 'Bottom Padding',
        'allow_null'  => 1,
        'choices'     => [
            'padding-bottom-lg' => 'Large [xs:100px / lg:200px]',
            'padding-bottom-md' => 'Normal [xs:50px / lg:100px]',
            'padding-bottom-sm' => 'Small [xs:40px / lg:50px]',
        ],
        'wrapper'     => [
            'width' => 15
        ]
    ]);

return $padding;