<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$svg = new FieldsBuilder( 'svg', [ 'title' => 'SVG Icon' ] );

$svg
    ->addSelect('svg', [
        'label'      => 'SVG Icon',
        'allow_null' => 1,
        'choices'    => [
            'default' => 'Default Icon',
        ],
        'wrapper' => ['width' => 20]
    ]);

return $svg;