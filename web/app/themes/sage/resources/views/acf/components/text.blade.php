@php
    $color = get_sub_field('color');
    $colorClass = $color ? " text-$color" : '';

    $contained = get_sub_field('contained');
    $containedClass = $contained ? " contained" : '';
    
    $margin_bottom = get_sub_field('margin_bottom');
    $marginClass = $margin_bottom ? " acf-margin-$margin_bottom" : '';
@endphp

<div class="acf-{{ layout() }}{{$colorClass}}{{$marginClass}}{{$containedClass}}">
    @sub('text')
</div>
