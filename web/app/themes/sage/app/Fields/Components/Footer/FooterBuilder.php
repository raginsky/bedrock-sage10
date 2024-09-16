<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_builder = new FieldsBuilder( 'footer_builder' );

$footer_builder
	->addTab( 'builder', [ 'placement' => 'top' ] )
	->addFlexibleContent( 'footer_components' )
	->addLayout( get_field_partial( 'components.footer.footerMenu' ) )
	->addLayout( get_field_partial( 'components.footer.footerLogo' ) )
	->addLayout( get_field_partial( 'components.footer.footerText' ) )
	->addLayout( get_field_partial( 'components.footer.footerTitle' ) )
	->addLayout( get_field_partial( 'components.footer.footerCopyright' ) )
	->addLayout( get_field_partial( 'components.footer.footerRow' ) )
	->endFlexibleContent();

return $footer_builder;