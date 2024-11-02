<nav class="wpbase-header top-0 left-0 right-0 z-20 w-full">
  <div class="wpbase-header__container container max-w-container-lg mx-auto">
    <div class="wpbase-header__wrapper flex justify-between flex-wrap">
      <a class="flex items-center" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
        <div class="logo">@include('svg.logo')</div>
      </a>
    
      @if (has_nav_menu('primary_navigation'))
      <div class="flex items-center lg:hidden">
        <button id="nav_toggle" class="menu-icon px-3 py-2">
        @include('svg.burger')  
        </button>
      </div>
      <div id="nav_content" class="wpbase-header__content w-full flex-grow lg:flex lg:items-center lg:w-auto" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <ul class="wpbase-header__menu lg:flex justify-end flex-1 items-center">
          <button id="nav_close" class="close-icon">
            @include('svg.close')  
            </button>
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'wpbase-header__items', 
            'echo' => false]) !!}
        </ul>
      </div>
      @endif
      
    </div>
  </div>
</nav>