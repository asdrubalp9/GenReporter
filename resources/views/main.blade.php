
<!DOCTYPE html>
<html lang="en">
  @include('partials._header')
  <body>
    @include('partials._nav')
      
      <div class="container theme-showcase" role="main">
      <br><br>
      @include('partials._messages')
          @yield('content')
      </div>    
      

      @include('partials._footer')
  </body>
</html>
@include('partials._scripts')
      @yield('javas')