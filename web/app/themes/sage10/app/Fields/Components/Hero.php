<?php

namespace App\Fields\Components;

use StoutLogic\AcfBuilder\FieldsBuilder;
use function App\Helpers\get_field_partial;

$hero = new FieldsBuilder('hero');

$hero
   ->addTexT('text');

return $hero;