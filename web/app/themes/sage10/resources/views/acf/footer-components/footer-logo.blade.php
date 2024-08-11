@wrapper(div)
<a class="acf-{{layout()}}__link flex" href="{{ home_url() }}"
   title="{{ get_bloginfo('name', 'display') }}">
  <div class="logo">@include('svg.footer-logo')</div>
</a>
@endwrapper(div)