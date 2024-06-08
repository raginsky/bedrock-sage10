<!doctype html>
<html @php(language_attributes()) class="antialiased">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
  </head>
  <body @php(body_class()) class="leading-normal tracking-normal">
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