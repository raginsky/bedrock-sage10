<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
    ->addFlexibleContent('components', ['button_label' => 'Add Component'])
    ->endFlexibleContent();

return $builder;
 