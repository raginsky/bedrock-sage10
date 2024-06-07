<nav class="wpbase-header sticky top-0 z-20 w-full bg-light py-4 items-center bg-grey p-6">
  <div class="flex max-w-container-lg mx-auto px-container justify-between flex-wrap">
  <a class="flex items-center" href={{ home_url('/') }}>
    <span class="w-16 h-16">@include('svg.logo')</span>
  </a>

  @if (has_nav_menu('primary_navigation'))
  <div class="flex items-center lg:hidden">
    <button id="nav-toggle" class="px-3 py-2 hover:text-primary">
    @include('svg.burger')  
    </button>
  </div>
  <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden pt-6 lg:pt-0" id="nav-content" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    <ul class="lg:flex justify-end flex-1 items-center">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6 flex-col items-end lg:flex-row lg:items-center', 'echo' => false]) !!}
    </ul>
  </div>
  @endif
  </div>
</nav>