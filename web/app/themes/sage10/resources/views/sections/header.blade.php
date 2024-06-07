<header class="sticky top-0 z-20 w-full bg-light py-4">
  <div class="container mx-auto flex justify-between items-center px-4">
    <a class="flex items-center" href="{{ home_url('/') }}">
      <span class="logo w-16 h-16">@include('svg.logo')</span>
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav id="primary-navigation" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
