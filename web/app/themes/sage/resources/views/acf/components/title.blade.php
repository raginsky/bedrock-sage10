@php
    $tag = get_sub_field('tag');
    
    $color = strtolower(get_sub_field('color'));
    $colorClass = $color ? " text-$color" : '';
    
    $size = get_sub_field('size');
    $sizeClass = $size ? " acf-text-$size" : '';

    $contained = get_sub_field('contained');
    $containedClass = $contained ? " contained" : '';
    
    $weight = strtolower(get_sub_field('weight'));
    $weightClass = $weight ? " font-$weight" : '';
    
    $uppercase = get_sub_field('uppercase');
    $uppercaseClass = $uppercase ? ' uppercase' : '';
    
    $margin_bottom = get_sub_field('margin_bottom');
    $marginClass = $margin_bottom ? " acf-margin-$margin_bottom" : '';
    
    $href = '';
    if ($tag == 'a') {
        $url = get_sub_field('url');
        $href = " href=\"$url\"";
    }
@endphp

<{{$tag}} class="acf-title{{$colorClass}}{{$sizeClass}}{{$weightClass}}{{$uppercaseClass}}{{$marginClass}}{{$containedClass}}"{{$href}}>
    {!! get_sub_field('title') !!}
</{{$tag}}>
