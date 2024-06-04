<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer_content = new FieldsBuilder( 'footer_content' );

$footer_content
	->addFlexibleContent( 'footer_content' )
	->addLayout( get_field_partial( 'components.footer.footerMain' ) )
	->endFlexibleContent();


return $footer_content;