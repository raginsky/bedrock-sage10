<!doctype html>
<html @php(language_attributes()) class="antialiased">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! get_field('after_head_start', 'option') !!}
    @php(do_action('get_header'))
    @php(wp_head())
    @include('partials.meta-fields')
  </head>
  <body @php(body_class(pageClass())) class="leading-normal tracking-normal">
    {!! get_field('after_body_start', 'option') !!}
    @php(wp_body_open())

    <div id="app" class="min-h-screen flex flex-col">
      @include('sections.header')

      <main id="main" class="main flex-grow">
        @yield('content')
      </main>

    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>