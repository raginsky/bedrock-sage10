<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flex_content = new FieldsBuilder( 'flex_content', [
    'hide_on_screen' => [
        'the_content'
    ]
] );

$flex_content
    ->setLocation( 'page_template', '==', 'template-flex-content.blade.php' );

$flex_content
    ->addTab( 'content' )
    ->addFlexibleContent( 'flex_content', [ 'label' => '', 'button_label' => 'Add Content to Page' ] )
    ->setInstructions( '<b>Click "Add Content to Page" button to see available section layouts options you could add to the page</b>' )
	->addLayout( get_field_partial( 'layouts.hero' ), [ 'max' => 1 ] )
	->addLayout( get_field_partial( 'layouts.section' ) )
    ->endFlexibleContent();

return $flex_content;