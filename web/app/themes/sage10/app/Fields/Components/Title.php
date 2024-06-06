<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include(get_template_directory() . "/app/Fields/Partials/Config.php");

$title = new FieldsBuilder('title');

$title
    // Content Tab
    ->addTab('Content')
    ->addTextarea('title', [
        'rows' => '2',
        'new_lines' => 'br'
    ])

    // Settings Tab
    ->addTab('Settings')
    ->addRadio('color', [
        'label'       => 'Color',
        'allow_null'  => 1,
        'choices'     => $global_config->text_color_pallet,
        'wrapper'     => ['width' => 20]
    ])
    ->setSelector( '.color-selector' )
    ->addSelect('tag', [
        'label'       => 'Title Tag',
        'choices'     => [
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
            'p'  => 'P',
            'a'  => 'A',
            'small' => 'Small'
        ],
        'default_value' => 'h4',
        'wrapper'     => ['width' => 15]
    ])
    ->addText('url', [])
    ->conditional('tag', '==', 'a')
    ->setWidth(15)
    ->addSelect('size', [
        'label'       => 'Size',
        'allow_null'  => 1,
        'choices'     => [
            'xl' => 'Extra Large',
            'lg' => 'Large',
            'md' => 'Medium',
            'sm' => 'Small',
            'xs' => 'Extra Small'
        ],
        'default_value' => 'md',
        'wrapper'     => ['width' => 15]
    ])
    ->addSelect('weight', [
        'label'       => 'Font Weight',
        'choices'     => [
            'normal' => 'Normal',
            'light'  => 'Light',
            'medium' => 'Medium',
            'bold'   => 'Bold'
        ],
        'default_value' => 'normal',
        'wrapper'     => ['width' => 15]
    ])
    ->addTrueFalse('uppercase', [
        'label'       => 'Text Style',
        'ui'          => 1,
        'ui_on_text'  => 'Uppercase',
        'ui_off_text' => 'Lowercase',
        'wrapper'     => ['width' => 20]
    ])
    ->addSelect('margin_bottom', [
        'label'       => 'Margin Bottom',
        'allow_null'  => 1,
        'choices'     => [
            'small'  => 'Small',
            'normal' => 'Normal',
            'large'  => 'Large'
        ],
        'wrapper'     => ['width' => 15]
    ]);

return $title;