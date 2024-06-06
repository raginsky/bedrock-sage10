<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include(get_template_directory() . "/app/Fields/Partials/Config.php");

$settings = new FieldsBuilder('settings');

$settings
    // Settings Tab
    ->addTab('settings', ['placement' => 'top'])

    // Section ID
    ->addText('title', [
        'label' => 'Section ID'
    ])->setWidth(20)

    // Alignment and Container
    ->addTrueFalse('align_center', [
        'label'       => 'Align Text',
        'ui'          => 1,
        'ui_on_text'  => 'Center',
        'ui_off_text' => 'Left'
    ])->setWidth(10)
    ->addTrueFalse('container', [
        'label'       => 'Container',
        'ui'          => 1,
        'ui_on_text'  => 'Container',
        'ui_off_text' => 'No Container'
    ])->setWidth(15)
    ->setDefaultValue('1')

    // Gap
    ->addSelect('gap', [
        'label'       => 'Gap',
        'allow_null'  => 1
    ])->setWidth(15)
    ->addChoices('normal-gap', 'large-gap', 'small-gap', 'no-gap-top', 'no-gap-bottom', 'no-gap')
    ->setDefaultValue('normal-gap')

    // Background and Text Color
    ->addRadio('background', [
        'label'       => 'Background Color',
        'allow_null'  => 1
    ])->setWidth(20)
    ->setSelector( '.color-selector' )
    ->addChoices($global_config->bg_color_pallet)
    ->addRadio('text_color', [
        'label'       => 'Text Color',
        'allow_null'  => 1
    ])->setWidth(20)
    ->setSelector( '.color-selector' )
    ->addChoices($global_config->text_color_pallet)

    // Background Images
    ->addImage('bg_image', [
        'label'         => 'Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url'
    ])->setWidth(25)
    ->addImage('bg_image_sm', [
        'label'         => 'Small Background Image',
        'preview_size'  => 'medium',
        'return_format' => 'url'
    ])->setWidth(25)

    // Background Size and Alignment
    ->addSelect('bg_size', [
        'label'       => 'Background Size',
        'allow_null'  => 1
    ])->setWidth(25)
    ->addChoices('cover', 'contain')
    ->addSelect('bg_align', [
        'label'       => 'Background Alignment',
        'allow_null'  => 1
    ])->setWidth(25)
    ->addChoices([
        'center-top'    => 'Center Top',
        'center-center' => 'Center Center',
        'center-bottom' => 'Center Bottom',
        'right-top'     => 'Right Top',
        'right-center'  => 'Right Center',
        'right-bottom'  => 'Right Bottom',
        'left-top'      => 'Left Top',
        'left-center'   => 'Left Center',
        'left-bottom'   => 'Left Bottom'
    ]);

return $settings;