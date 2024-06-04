@php
  $component = 'acf-' . layout();
  $newWidth = get_sub_field('new_width');
@endphp

@wrapper(div)

@hassub('image_sm')
    <img src="@sub('image_sm', 'url')"
         alt="@sub('image_sm', 'alt')"
         loading="lazy"
         @if($newWidth) width="{{ $newWidth }}" @endif
         class="{{ $component }}--sm block max-w-full h-auto md:hidden">
@endsub

@hassub('image')
    <img src="@sub('image', 'url')"
         alt="@sub('image', 'alt')"
         loading="lazy"
         @if($newWidth) width="{{ $newWidth }}" @endif
         class="{{ $component }}--md hidden max-w-full h-auto md:block">
@endsub

@endwrapper(div)
