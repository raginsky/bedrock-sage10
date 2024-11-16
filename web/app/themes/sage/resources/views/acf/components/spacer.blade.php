@set($component, 'acf-'. layout())
@php
$padding_top = get_sub_field('padding_top');
$padding_bottom = get_sub_field('padding_bottom');

$paddingClass = '';
$paddingClass .= $padding_top ? " acf-$padding_top" : '';
$paddingClass .= $padding_bottom ? " acf-$padding_bottom" : '';

@endphp

<div class="{{$component}}{{$paddingClass}}"></div>