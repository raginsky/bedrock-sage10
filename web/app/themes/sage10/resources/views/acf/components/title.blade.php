@php
    $tag = get_sub_field('tag');
    
    $color = strtolower(get_sub_field('color'));
    $colorClass = $color ? " text-$color" : '';
    
    $size = get_sub_field('size');
    $sizeClass = $size ? " text-$size" : '';
    
    $weight = strtolower(get_sub_field('weight'));
    $weightClass = '';
    switch ($weight) {
        case 'normal':
            $weightClass = ' font-normal';
            break;
        case 'light':
            $weightClass = ' font-light';
            break;
        case 'medium':
            $weightClass = ' font-medium';
            break;
        case 'bold':
            $weightClass = ' font-bold';
            break;
    }
    
    $uppercase = get_sub_field('uppercase');
    $uppercaseClass = $uppercase ? ' uppercase' : '';
    
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
    
    $href = '';
    if ($tag == 'a') {
        $url = get_sub_field('url');
        $href = " href=\"$url\"";
    }
@endphp

<{{$tag}} class="acf-title{{$colorClass}}{{$sizeClass}}{{$weightClass}}{{$uppercaseClass}}{{$marginClass}}"{{$href}}>
    <span>{!! get_sub_field('title') !!}</span>
</{{$tag}}>
