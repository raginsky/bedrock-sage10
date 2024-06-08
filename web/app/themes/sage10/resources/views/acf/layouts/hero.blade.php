@wrapper(div)
{!! Page::bgImage() !!}
    @container
      <div class="relative flex flex-col xl:min-h-heroLg justify-center">
        @layouts('components')
          @include('acf.components.' . layout())
        @endlayouts
      </div>
    @endcontainer
@endwrapper(div)
