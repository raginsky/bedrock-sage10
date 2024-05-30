<?php

namespace App\Fields\Components;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero
{
    public static function getFields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addText('hero_title', ['label' => 'Hero Title'])
            ->addImage('hero_image', ['label' => 'Hero Image']);

        return $hero;
    }
}