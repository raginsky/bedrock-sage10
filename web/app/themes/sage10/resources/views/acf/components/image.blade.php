@acfmodule(div)
@set($component, 'acf-' . layout())

@hassub('image_sm')
    <img src="@sub('image_sm', 'url')"
         alt="@sub('image_sm', 'alt')"
         loading="lazy"
         @if(get_sub_field('new_width')) width="@sub('new_width')" @endif
         class="{{$component}}--sm">
@endsub

@hassub('image')
    <img src="@sub('image', 'url')"
         alt="@sub('image', 'alt')"
         loading="lazy"
         @if(get_sub_field('new_width')) width="@sub('new_width')" @endif
         @hassub('image_sm') class="{{$component}}--md" @endsub>
@endsub

@endacfmodule(div)
