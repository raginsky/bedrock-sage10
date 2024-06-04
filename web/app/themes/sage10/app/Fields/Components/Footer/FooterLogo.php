<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_logo = new FieldsBuilder( 'footer_logo' );
$footer_logo
	->addMessage('', 'The logo will be displayed in current position');

return $footer_logo;