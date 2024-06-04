<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_builder = new FieldsBuilder( 'footer_builder' );

$footer_builder
	->addTab( 'builder', [ 'placement' => 'left' ] )
	->addFlexibleContent( 'footer_components' )
	->addLayout( get_field_partial( 'components.footer.footerRow' ) )
	->endFlexibleContent();

return $footer_builder;