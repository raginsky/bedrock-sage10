@wrapper(div)
{!! Page::bgImage() !!}
    @container
        @layouts('components')
          @include('acf.components.' . layout())
        @endlayouts
    @endcontainer
@endwrapper(div)
