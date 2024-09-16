<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'top'])
    ->addFlexibleContent('components', ['button_label' => 'Add Component'])
    ->addLayout( get_field_partial( 'components.title' ) )
    ->addLayout( get_field_partial( 'components.text' ) )
    ->addLayout( get_field_partial( 'components.image' ) )
    ->addLayout( get_field_partial( 'components.buttons' ) )
    ->addLayout( get_field_partial( 'components.customList' ) )
    ->addLayout( get_field_partial( 'components.row' ) )
    
    ->endFlexibleContent();

return $builder;
 