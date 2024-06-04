<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_copyright = new FieldsBuilder( 'footer_copyright' );
$footer_copyright
    ->addMessage('', 'The © and current year are added automatically. Use "Copyright Title" to customize the text.')
    ->addText( 'footer_copyright', ['label' => 'Copyright Title'] );

return $footer_copyright;