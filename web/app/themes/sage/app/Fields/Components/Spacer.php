<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$spacer = new FieldsBuilder( 'spacer' );

$spacer
    ->addFields(get_field_partial('fragments.padding'));

return $spacer;