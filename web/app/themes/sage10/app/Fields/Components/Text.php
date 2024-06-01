<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include( get_template_directory() . "/app/Fields/Partials/Config.php" );

$text = new FieldsBuilder( 'text' );
$text
	->addTab( 'Content' )
	->addWysiwyg('text')
	->addTab( 'Settings' )
	->addSelect( 'size', [ 'allow_null' => 1 ] )
	->setWidth( 15 )
	->addChoices( 'xl', 'lg', 'md', 'sm', 'xs' )
	->addRadio( 'color', [ 'allow_null' => 1 ] )
	->setSelector( '.radio_colors' )
	->setWidth( 25 )
	->addChoices( $global_config->text_color_pallet )
	->addSelect( 'margin_bottom', [
		'allow_null' => 1
	] )
	->setWidth( 15 )
	->addChoices( 'small', 'normal', 'large' )
	->addTrueFalse( 'contain', [
		'label'       => 'Width',
		'ui_on_text'  => 'Centered',
		'ui_off_text' => 'Max'
	] )
	->setWidth( 30 );

return $text;