@extends('layouts.app')

@section('content')
  {{-- @include('sections.header') --}}
  <div class="current-container container max-w-container-lg z-3 mx-auto w-full overflow-hidden flex flex-col relative">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </div>
      <br>
      <a class="acf-btn acf-btn-primary" title="{{ get_bloginfo('name', 'display') }}" 
      href="{{ home_url('/') }}" target="_self">
        <span class="btn-label">{{ __('BACK TO HOMEPAGE', 'sage') }}</span>
    </a>
    @endif
  </div>

  @include('acf.layouts.footer-content')

@endsection
