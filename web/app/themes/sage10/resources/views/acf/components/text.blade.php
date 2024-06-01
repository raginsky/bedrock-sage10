@set($size, get_sub_field('size') )
@set($sizeClass, $size ? " acfm-text-$size" : '' )
@set($color, get_sub_field('color') )
@set($colorClass, $color ? " acfm-text-color-$color" : '' )
@set($margin_bottom, get_sub_field('margin_bottom'))
@set($marginClass, $margin_bottom ? " acfm-margin-bottom--$margin_bottom" : '' )

<div class="acfm-{{layout()}}{{$sizeClass}}{{$colorClass}}{{$marginClass}}">
  @sub('text')
</div>
