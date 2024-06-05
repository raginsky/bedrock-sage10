@wrapper(div)
  <div class="relative z-1 acf-{{layout()}}">
    @container
      <div class="relative z-2">
        @layouts('components')
          @include('acf.components.' . layout())
        @endlayouts
      </div>
    @endcontainer
  </div>
@endwrapper(div)
