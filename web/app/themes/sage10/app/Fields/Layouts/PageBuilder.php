<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

class PageBuilder
{
    public static function getFields()
    {
        $builder = new FieldsBuilder('builder');

        $builder
            ->setLocation('page_template', '==', 'template-flex-content.blade.php')
            ->addTab('builder', ['placement' => 'left'])
            ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->endFlexibleContent();

        return $builder;
    }
}