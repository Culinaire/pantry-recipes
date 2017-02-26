@extends('master')

@section('body')
  
  <div class="container">

    @include('partials.header')
    {{-- @include('partials.jumbotron') --}}

    <div class="row marketing">
      @yield('content')
    </div><!-- /row marketing -->

    @include('partials.footer')

  </div> <!-- /container -->

@endsection


 
