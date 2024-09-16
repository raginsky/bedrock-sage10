<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$buttons = new FieldsBuilder('buttons');

$buttons
  ->addRepeater('buttons', ['min' => 1])
  ->addFields(get_field_partial('fragments.button'))
  ->endRepeater();

return $buttons;