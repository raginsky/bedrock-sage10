@php
    $size = get_sub_field('size');
    $sizeClass = $size ? " text-$size" : '';
    
    $color = get_sub_field('color');
    $colorClass = $color ? " text-$color" : '';
    
    $margin_bottom = get_sub_field('margin_bottom');
    $marginClass = '';
    switch ($margin_bottom) {
        case 'small':
            $marginClass = ' mb-2';
            break;
        case 'normal':
            $marginClass = ' mb-4';
            break;
        case 'large':
            $marginClass = ' mb-6';
            break;
    }
@endphp

<div class="acf-{{ layout() }}{{ $sizeClass }}{{ $colorClass }}{{ $marginClass }}">
    @sub('text')
</div>
