<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include( get_template_directory() . "/app/Fields/Partials/Config.php" );

$settings = new FieldsBuilder('settings');

$settings
    // Settings Tab
    ->addTab('settings', ['placement' => 'left'])

    // Container Option
    ->addTrueFalse('container', [
        'ui'          => 1,
        'ui_on_text'  => 'Container',
        'ui_off_text' => 'No Container',
    ])->setWidth(15)
    ->setDefaultValue('1')

    // Gap Option
    ->addSelect('gap', ['allow_null' => 1])
    ->setWidth(15)
    ->addChoices(
        'normal-gap',
        'large-gap',
        'small-gap',
        'no-gap-top',
        'no-gap-bottom',
        'no-gap'
    )
    ->setDefaultValue('normal-gap')

    // Background Color Option
    ->addRadio('background', ['allow_null' => 1])
    ->setSelector('.radio_colors')
    ->setWidth(15)
    ->addChoices($global_config->bg_color_pallet)

    // Text Color Option
    ->addRadio('text_color', ['allow_null' => 1])
    ->setSelector('.radio_colors')
    ->setWidth(15)
    ->addChoices($global_config->text_color_pallet)

    // Background Image Option
    ->addImage('bg_image', [
        'label'         => 'Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url'
    ])->setWidth(25)

    // Small Background Image Option
    ->addImage('bg_image_sm', [
        'label'         => 'Small Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url'
    ])->setWidth(25)

    // Background Alignment Option
    ->addSelect('bg_align', ['allow_null' => 1])
    ->setWidth(25)
    ->addChoices('right', 'left', 'bottom', 'top')

    // Background Size Option
    ->addSelect('bg_size', ['allow_null' => 1])
    ->setWidth(25)
    ->addChoices('cover', 'contain');

return $settings;