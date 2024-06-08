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
         class="{{ $component }}--sm max-w-full h-auto
         @hassub('image') block md:hidden @endsub ">
@endsub

@hassub('image')
    <img src="@sub('image', 'url')"
         alt="@sub('image', 'alt')"
         loading="lazy"
         @if($newWidth) width="{{ $newWidth }}" @endif
         class="{{ $component }}--md max-w-full h-auto
         @hassub('image_sm') hidden md:block @endsub ">
@endsub

@endwrapper(div)
