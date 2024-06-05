<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footerMenu = new FieldsBuilder('footer_menu');

$footerMenu
    ->addRepeater('menu_items', [
        'layout' => 'block',
        'button_label' => 'Add Menu Item',
    ])
        ->addText('menu_label', [
            'label' => 'Menu Label',
            'required' => 1,
        ])
        ->addLink('page_url', [
            'label' => 'Page URL',
            'return_format' => 'url',
            'wrapper' => [
                'width' => '50',
            ],
        ])
        ->addText('url', [
            'label' => 'Custom URL',
            'wrapper' => [
                'width' => '50',
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
                'width' => '50',
            ],
        ])
    ->endRepeater();

return $footerMenu;