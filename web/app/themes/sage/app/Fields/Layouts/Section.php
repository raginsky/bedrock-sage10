<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section = new FieldsBuilder('section');

$section
   ->addFields(get_field_partial('partials.builder'))
   ->addFields(get_field_partial('partials.settings'));

return $section;