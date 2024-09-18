<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include(get_template_directory() . "/app/Fields/Partials/Config.php");

$colors = new FieldsBuilder( 'colors' );
$colors    
    ->addRadio('text_color', [
        'label'       => 'Text Color',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 15]
    ])
    ->setSelector( '.color-selector' )
    ->addChoices($global_config->text_color_pallet)
    ->addRadio('background', [
        'label'       => 'Background Color',
        'allow_null'  => 1,
        'wrapper'     => ['width' => 10]
    ])
    ->setSelector( '.color-selector' )
    ->addChoices($global_config->bg_color_pallet);

return $colors;