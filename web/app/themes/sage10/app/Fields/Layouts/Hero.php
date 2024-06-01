<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
   ->addFields(get_field_partial('partials.builder'))
   ->addFields(get_field_partial('partials.settings'));

return $hero;