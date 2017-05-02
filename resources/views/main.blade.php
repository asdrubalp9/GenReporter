
<!DOCTYPE html>
<html lang="en">
  @include('partials._header')
  <body>
    @include('partials._nav')
      <br><br>
      <div class="container theme-showcase" role="main">
          @yield('content')
      </div>    
      @include('partials._scripts')

      @include('partials._footer')
  </body>
</html>