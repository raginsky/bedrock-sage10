
@php
$meta_fields = [
    'og:title' => get_field('meta_title', 'option'),
    'og:description' => get_field('meta_description', 'option'),
    'og:image' => get_field('meta_image', 'option'),
    'og:url' => get_field('meta_url', 'option'),
    'og:type' => get_field('meta_type', 'option'),
];
@endphp

<!doctype html>
<html @php(language_attributes()) class="antialiased">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! get_field('after_head_start', 'option') !!}
    @php(do_action('get_header'))
    @php(wp_head())


    @foreach ($meta_fields as $property => $content)
        @if ($content)
            <meta property="{{ $property }}" content="{{ $content }}">
        @endif
    @endforeach
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