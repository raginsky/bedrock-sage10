<header class="sticky top-0 z-20 w-full bg-primary py-4">
  <div class="container mx-auto flex justify-between items-center px-4">
    <a class="flex items-center" href="{{ home_url('/') }}">
      @include('svg.logo')
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-4', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
