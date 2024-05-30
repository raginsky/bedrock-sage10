<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Components\Hero;

class FlexContent
{
    public static function getFields()
    {
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
            ->addLayout(Hero::getFields()) 
            ->endFlexibleContent();

        return $flex_content;
    }
}