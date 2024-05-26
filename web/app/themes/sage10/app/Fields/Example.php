<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Example extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $example = Builder::make('example');

        $example
            ->setLocation('post_type', '==', 'post');

        $example
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $example->build();
    }
}
