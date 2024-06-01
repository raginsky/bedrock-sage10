{{--
  Template Name: Flex Content Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('acf.flex-content')
  @endwhile
@endsection
