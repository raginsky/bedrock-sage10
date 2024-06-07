<nav class="wpbase-header flex sticky top-0 z-20 w-full bg-light py-4 items-center justify-between flex-wrap bg-grey-darkest p-6 fixed w-full z-10 pin-t">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <a class="flex items-center" href={{ home_url('/') }}>
      <span class="logo w-16 h-16">@include('svg.logo')</span>
    </a>
  </div>

  @if (has_nav_menu('primary_navigation'))
  <div class="block lg:hidden">
    <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    <ul class="list-reset lg:flex justify-end flex-1 items-center">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6', 'echo' => false]) !!}
    </ul>
  </div>
  @endif
</nav>