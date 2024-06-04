<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_title = new FieldsBuilder( 'footer_title' );
$footer_title
	->addText( 'footer_title' );

return $footer_title;