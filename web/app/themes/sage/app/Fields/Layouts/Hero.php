<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
   ->addFields(get_field_partial('partials.builder'))
   ->addFields(get_field_partial('partials.settings'))
   ->removeField('padding_top')
   ->removeField('padding_bottom');

return $hero;