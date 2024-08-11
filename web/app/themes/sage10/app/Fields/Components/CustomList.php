<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include( get_template_directory() . "/app/Fields/Partials/Config.php" );

$custom_list = new FieldsBuilder( 'custom_list' );
$custom_list
    ->addSelect('style', [
        'allow_null' => 1,
        'choices'    => [
            'default' => 'Default Style',
        ],
        'wrapper'    => ['width' => 50],
    ])

    ->addTrueFalse('slider', [
        'label'       => 'Enable Slider for Mobile',
        'ui'          => 1,
        'ui_on_text'  => 'Enable',
        'ui_off_text' => 'Disable',
        'wrapper'    => ['width' => 50]
        ])

    ->addRepeater('custom_list', [
        'min'          => 1,
        'layout'       => 'block',
        'button_label' => 'Add List item',
        'instructions' => 'Click "Add List Item" to add new Item to the List'
    ])
    
    ->addTab("Main")
    // Add Image field
    ->addImage('image', [
        'label'        => 'Image',
        'preview_size' => 'medium',
        'wrapper'      => ['width' => 30]
    ])

    // Add Title field
    ->addTextarea('title', [
        'rows'      => 2,
        'new_lines' => 'br',
        'wrapper'   => ['width' => 35]
    ])

    // Add Text field
    ->addTextarea('text', [
        'rows'      => 4,
        'new_lines' => 'br',
        'wrapper'   => ['width' => 35]
    ])

    ->addTab("Button")
    ->addFields(get_field_partial('fragments.button'))
    ->endRepeater();

return $custom_list;