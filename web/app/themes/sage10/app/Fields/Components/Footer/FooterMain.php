<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_main = new FieldsBuilder( 'footer_main' );

$footer_main->addTextarea( 'title', [ 'rows' => '2', 'new_lines' => 'br' ] );

return $footer_main;