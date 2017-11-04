<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  @if(Auth::check() || Route::current()->getName() == 'login' || Route::current()->getName() == 'register')
    <body>
  @else
    <body class="body-image">
  @endif
  <!-- class="body-image"> -->

    @include('partials._nav')
      
    <!-- Build the main body -->

    <div class="container">

      @include('partials._messages')

      @yield('content')

      @include('partials._footer')

    </div> <!-- end of .container -->

        @include('partials._javascript')

        @yield('scripts')
    </body>
</html>