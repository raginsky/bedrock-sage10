<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

include( get_template_directory() . "/app/Fields/Partials/Config.php" );

$title = new FieldsBuilder( 'title' );
$title
	->addTab( 'Content' )
	->addTextarea( 'title', [ 'rows' => '2', 'new_lines' => 'br' ] )
	->addTab( 'Settings' )
	->addRadio( 'color', [ 'allow_null' => 1 ] )
	->setSelector( '.radio_colors' )
	->setWidth( 20 )
	->addChoices( $global_config->text_color_pallet )
	->addSelect( 'tag', [ 'label' => 'Title Tag' ] )
	->setWidth( 15 )
	->addChoices( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'a', 'small' )
	->setDefaultValue( 'h4' )
	->addText( 'url', [] )
	->setWidth( 15 )
	->conditional( 'tag', '==', 'a' )
	->addSelect( 'size', [ 'allow_null' => 1 ] )
	->setWidth( 15 )
	->addChoices( 'xl', 'lg', 'md', 'sm', 'xs' )
	->setDefaultValue( 'md' )
	->addSelect( 'weight', [ 'label' => 'Font Weight' ] )
	->setWidth( 15 )
	->addChoices( 'Normal', 'Light', 'Medium', 'Bold' )
	->setDefaultValue( 'Normal' )
	->addTrueFalse( 'uppercase', [
		'label'       => 'Text style',
		'ui'          => 1,
		'ui_on_text'  => 'Uppercase',
		'ui_off_text' => 'Lowercase'
	] )
	->setWidth( 20 )
	->addSelect( 'margin_bottom', [
		'allow_null' => 1
	] )
	->setWidth( 15 )
	->addChoices( 'small', 'normal', 'large' );

return $title;