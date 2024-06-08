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

    ->addRepeater('custom_list', [
        'min'          => 1,
        'layout'       => 'block',
        'button_label' => 'Add List item',
        'instructions' => 'Click "Add List Item" to add new Item to the List'
    ])
    
    // Add SVG field
    ->addFields(get_field_partial('fragments.svg'))

    // Add Image field
    ->addImage('image', [
        'label'        => 'Image',
        'preview_size' => 'medium',
        'wrapper'      => ['width' => 20]
    ])

    // Add Title field
    ->addTextarea('title', [
        'rows'      => 2,
        'new_lines' => 'br',
        'wrapper'   => ['width' => 25]
    ])

    // Add Text field
    ->addTextarea('text', [
        'rows'      => 2,
        'new_lines' => 'br',
        'wrapper'   => ['width' => 25]
    ])

    // Add URL toggle field
    ->addTrueFalse('page_url', [
        'label'       => 'URL',
        'ui'          => 1,
        'ui_on_text'  => 'Yes',
        'ui_off_text' => 'No',
        'wrapper'     => ['width' => 10]
    ])

    // Add Page Link field, conditional on URL toggle
    ->addPageLink('id_link', [
        'label'          => 'Page URL',
        'post_type'      => ['page'],
        'allow_archives' => 0,
        'allow_null'     => 1,
        'wrapper'        => ['width' => 25]
    ])
    ->conditional('page_url', '==', 1)

    // Add Custom URL field, conditional on URL toggle
    ->addText('url', [
        'label'   => 'Custom URL',
        'wrapper' => ['width' => 25]
    ])
    ->conditional('page_url', '==', 1)

    // Add Link Target field, conditional on URL toggle
    ->addSelect('target', [
        'label'      => 'Link Target',
        'allow_null' => 1,
        'choices'    => [
            'blank'    => 'Open in new Tab',
            'self'     => 'Open in same Tab',
            'download' => 'Download File',
        ],
        'wrapper' => ['width' => 20]
    ])
    ->conditional('page_url', '==', 1)

    ->endRepeater();

return $custom_list;