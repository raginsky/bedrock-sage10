@php
  $tag = get_sub_field('tag');
  $color = strtolower(get_sub_field('color'));
  $colorClass = $color ? " acfm-text-color-$color" : "";
  $size = get_sub_field('size');
  $sizeClass = $size ? " acfm-text-$size" : '';
  $weight = strtolower(get_sub_field('weight'));
  $weightClass = $weight ? " acfm-text-$weight" : '';
  $uppercase = get_sub_field('uppercase');
  $uppercaseClass = $uppercase ? ' acfm-text-uppercase' : '';
  $margin_bottom = get_sub_field('margin_bottom');
  $marginClass = $margin_bottom ? ' acfm-margin-bottom--'. $margin_bottom : '';
  $href= '';

   if ($tag == 'a') {
   $url = get_sub_field('url');
   $urlClass = ' acfm-text-url';
   $href = "href=$url";
  } else {
  $urlClass= '';
  }
@endphp

<{{$tag}} class="acfm-title{{$colorClass}}{{$sizeClass}}{{$weightClass}}{{$uppercaseClass}}{{$marginClass}}{{$urlClass}}"{{$href}}>
<span>{!! get_sub_field('title') !!}</span>
</{{$tag}}>
