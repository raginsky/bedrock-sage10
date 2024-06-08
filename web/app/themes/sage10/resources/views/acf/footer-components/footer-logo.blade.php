@wrapper(div)
<a class="acf-{{layout()}}__link w-16 h-16" href="{{ home_url() }}"
   title="{{ get_bloginfo('name', 'display') }}">
  @include('svg.logo')
</a>
@endwrapper(div)