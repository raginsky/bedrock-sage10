<header class="wpbase-header sticky top-0 right-0 left-0 z-20 w-full py-4 bg-primary text-black">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex space-x-4', 'echo' => false]) !!}
    </nav>
  @endif
</header>
