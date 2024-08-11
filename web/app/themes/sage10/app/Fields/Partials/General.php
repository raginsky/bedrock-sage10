<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$general = new FieldsBuilder('general');

$general
	->addText( 'page_class', [
		'label' => 'Page Class',
	]);

return $general;