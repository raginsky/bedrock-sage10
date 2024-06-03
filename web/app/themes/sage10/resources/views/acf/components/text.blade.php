@set($size, get_sub_field('size') )
@set($sizeClass, $size ? " acf-text-$size" : '' )
@set($color, get_sub_field('color') )
@set($colorClass, $color ? " acf-text-color-$color" : '' )
@set($margin_bottom, get_sub_field('margin_bottom'))
@set($marginClass, $margin_bottom ? " acf-margin-bottom--$margin_bottom" : '' )

<div class="acf-{{layout()}}{{$sizeClass}}{{$colorClass}}{{$marginClass}}">
  @sub('text')
</div>
