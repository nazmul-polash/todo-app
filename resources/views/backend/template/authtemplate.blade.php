
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- header -->
    @include('backend.includes.header')

    <!-- css -->
    @include('backend.includes.css')
  </head>

  <body>

    @yield('auth-body')

    <!-- scripts -->
    @include('backend.includes.scripts')

  </body>
</html>