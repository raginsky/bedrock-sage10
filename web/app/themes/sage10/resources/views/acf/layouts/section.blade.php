@php
  $component = 'acf-section';
@endphp

@wrapper('div')
  <div class="relative z-1 {{ $component }}">
    @container
      <div class="relative z-2 {{ $component }}__container">
        @layouts('components')
          @include('acf.components.' . layout())
        @endlayouts
      </div>
    @endcontainer
  </div>
@endwrapper('div')
