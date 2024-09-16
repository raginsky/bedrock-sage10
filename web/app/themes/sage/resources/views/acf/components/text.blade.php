@php
    $size = get_sub_field('size');
    $sizeClass = $size ? " acf-text-$size" : '';
    
    $color = get_sub_field('color');
    $colorClass = $color ? " text-$color" : '';

    $contained = get_sub_field('contained');
    $containedClass = $contained ? " contained" : '';
    
    $margin_bottom = get_sub_field('margin_bottom');
    $marginClass = '';
    switch ($margin_bottom) {
        case 'small':
            $marginClass = ' acf-small-margin';
            break;
        case 'normal':
            $marginClass = ' acf-normal-margin';
            break;
        case 'large':
            $marginClass = ' acf-large-margin';
            break;
    }
@endphp

<div class="acf-{{ layout() }}{{$sizeClass}}{{$colorClass}}{{$marginClass}}{{$containedClass}}">
    @sub('text')
</div>
