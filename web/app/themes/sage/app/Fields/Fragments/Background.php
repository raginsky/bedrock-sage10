<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$background = new FieldsBuilder( 'background' );
$background    
    ->addImage('bg_image', [
        'label'         => 'Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url',
        'wrapper'     => ['width' => 15]
    ])
    ->addImage('bg_image_sm', [
        'label'         => 'Small Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url',
        'wrapper'     => ['width' => 15]
    ])

    ->addSelect('bg_size', [
        'label'       => 'Background Size',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 15]
    ])
    ->addChoices('cover', 'contain')
    ->addSelect('bg_align', [
        'label'       => 'Background Alignment',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 15]
    ])
    ->addChoices([
        'center-top'    => 'Center Top',
        'center-center' => 'Center Center',
        'center-bottom' => 'Center Bottom',
        'right-top'     => 'Right Top',
        'right-center'  => 'Right Center',
        'right-bottom'  => 'Right Bottom',
        'left-top'      => 'Left Top',
        'left-center'   => 'Left Center',
        'left-bottom'   => 'Left Bottom'
    ]);
return $background;