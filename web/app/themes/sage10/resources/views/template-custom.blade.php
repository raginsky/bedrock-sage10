{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="page-content">
      @php the_content() @endphp
    </div>
    
    @if (have_rows('components'))
      @while (have_rows('components')) @php the_row() @endphp
        @include('components.' . get_row_layout())
      @endwhile
    @endif
  @endwhile
@endsection