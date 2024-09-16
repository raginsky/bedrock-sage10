<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_copyright = new FieldsBuilder( 'footer_copyright' );
$footer_copyright
    ->addMessage('',  '© All Rights Reserved. | will be displayed at current position');

return $footer_copyright;