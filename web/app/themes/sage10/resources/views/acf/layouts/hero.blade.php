@wrapper('div')
  <div class="relative py-4 acf-{{layout()}}__wrapper">
    @container
      <div class="relative z-3 flex flex-col py-12 lg:py-40 xl:min-h-heroLg xl:py-56 2xl:min-h-heroXl {{ $component }}__container">
        @layouts('components')
          @include('acf.components.' . layout())
        @endlayouts
      </div>
    @endcontainer
  </div>
@endwrapper('div')
