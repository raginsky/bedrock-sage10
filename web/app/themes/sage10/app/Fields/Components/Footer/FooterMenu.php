<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footerMenu = new FieldsBuilder('footer_menu');

$footerMenu
    ->addRepeater('menu_items', [
        'layout' => 'block',
        'button_label' => 'Add Menu Item',
        'min' => 1,
    ])
        ->addText('menu_label', [
            'label' => 'Menu Label',
            'required' => 1,
            'wrapper' => [
                'width' => '50',
            ],
        ])
        ->addLink('page_url', [
            'label' => 'Page URL',
            'return_format' => 'url',
            'wrapper' => [
                'width' => '20',
            ],
        ])
        ->addSelect('target', [
            'label' => 'Link Target',
            'choices' => [
                '_self' => 'Same Tab',
                '_blank' => 'New Tab',
            ],
            'default_value' => '_self',
            'wrapper' => [
                'width' => '30',
            ],
        ])
    ->endRepeater();

return $footerMenu;