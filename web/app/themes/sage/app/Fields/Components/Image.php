<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$image = new FieldsBuilder( 'image' );

$image
    ->addImage('image', [
        'preview_size' => 'medium',
        'label'        => 'Image',
        'instructions' => 'Will be displayed for both desktop and mobile if second image doesn\'t specified',
        'wrapper'      => ['width' => 40]
    ])
    
    ->addImage('image_sm', [
        'preview_size' => 'medium',
        'label'        => 'Mobile Image',
        'wrapper'      => ['width' => 40]
    ])
    
    ->addText('new_width', [
        'label'   => 'New Width',
        'wrapper' => ['width' => 20]
    ]);

return $image;