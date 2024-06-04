<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_row = new FieldsBuilder( 'footer_row' );

$footer_row
    // Reverse Columns on Mobile
    ->addTrueFalse('reverse_columns', [
        'label'       => 'Reverse Columns on Mobile',
        'ui'          => 1,
        'ui_on_text'  => 'Reverse',
        'ui_off_text' => 'Default'
    ])->setWidth(20)

    // Vertical Alignment
    ->addTrueFalse('vertical_alignment', [
        'ui'          => 1,
        'ui_on_text'  => 'Stretch',
        'ui_off_text' => 'Center'
    ])->setWidth(20)

    // Justify Content
    ->addSelect('justify_content', [
        'allow_null'   => 0,
        'choices'      => [
            'center'  => 'Center',
            'between' => 'Between',
            'right'   => 'Right',
            'left'    => 'Left',
        ],
        'default_value' => 'between'
    ])->setWidth(20)

    // Columns Repeater
    ->addRepeater('columns', [
        'min'          => 1,
        'button_label' => 'Add Column',
        'instructions' => 'Click "Add Column" to add new Column to the row'
    ])

        // Column Components Flexible Content
        ->addFlexibleContent('column_components', [
            'button_label' => 'Add Column Component'
        ])
        ->addLayout( get_field_partial( 'components.footer.footerTitle' ) )
        ->addLayout( get_field_partial( 'components.footer.footerText' ) )
        ->addLayout( get_field_partial( 'components.footer.footerLogo' ) )
        ->addLayout( get_field_partial( 'components.footer.footerCopyright' ) )
        ->endFlexibleContent()

        // Additional Fields for Columns
        ->addFields(get_field_partial('partials.rowSettings'))
    ->endRepeater();

return $footer_row;