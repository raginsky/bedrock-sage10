<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_main = new FieldsBuilder( 'footer_main' );

$footer_main
	->addFields( get_field_partial( 'components.footer.footerBuilder' ) );

return $footer_main;