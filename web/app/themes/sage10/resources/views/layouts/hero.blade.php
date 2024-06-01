@set($hideBg, get_sub_field('hide_on') ? 'acfm-bg-image-hide-' . strtolower(get_sub_field('hide_on')) : '')

@acfmodule

    @if($hideBg)
      <span class="{{$hideBg}}">
      @endif
        {!! Page::bgImage() !!}
        @if($hideBg)
      </span>
    @endif

  @container
  @layouts('components')
  @include ('acf.components.'. App::layout())
  @endlayouts
  @endcontainer
@endif
@endacfmodule
