@wrapper(div)
<a class="acf-{{layout()}}__link" href="{{ home_url() }}"
   title="{{ get_bloginfo('name', 'display') }}">
  @include('svg.logo')
</a>
@endwrapper(div)