<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$alignment = new FieldsBuilder( 'alignment' );
$alignment    
    ->addTrueFalse('align_mobile_center', [
        'label'       => 'Align Mobile Text',
        'ui'          => 1,
        'ui_on_text'  => 'Center',
        'ui_off_text' => 'Left',
        'wrapper'     => ['width' => 10]
    ])

    ->addTrueFalse('align_center', [
        'label'       => 'Align Desktop Text',
        'ui'          => 1,
        'ui_on_text'  => 'Center',
        'ui_off_text' => 'Left',
        'wrapper'     => ['width' => 10]
    ]);

return $alignment;