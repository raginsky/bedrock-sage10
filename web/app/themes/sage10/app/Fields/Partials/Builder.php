<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
    ->addFlexibleContent('components', ['button_label' => 'Add Component'])
    ->addLayout( get_field_partial( 'components.title' ) )
    ->addLayout( get_field_partial( 'components.text' ) )
    ->endFlexibleContent();

return $builder;
 