<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footerMenu = new FieldsBuilder('footer_menu');

$footerMenu
    ->addText('menu_title', 
    [
        'label' => 'Menu Title'
    ])
    ->addRepeater('menu_items', [
        'layout' => 'block',
        'button_label' => 'Add Menu Item',
        'min' => 1,
    ])
    ->addLink('link', [
        'label' => 'URL Properties',
        'wrapper'     => ['width' => 60]
    ])
    ->addSelect('font_weight', [
        'label'       => 'Font Weight',
        'choices'     => [
            'normal' => 'Normal',
            'light'  => 'Light',
            'medium' => 'Medium',
            'bold'   => 'Bold',
            'black'   => 'Black'
        ],
        'default_value' => 'normal',
        'wrapper'     => ['width' => 40]
    ])
    ->endRepeater();

return $footerMenu;