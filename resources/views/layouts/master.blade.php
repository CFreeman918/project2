<!DOCTYPE html>
<html lang="en">
<head>

@include('layouts.meta')

<title>
  @yield('title')
</title>

@include('layouts.css')
<!--Custom CSS specific to this page-->
@yield('css')
<!--End of custom CSS-->

  
  
</head>

<body role="document">

@include('layouts.nav')

  <!--Main Page Content-->
@yield('content')
  <!--End Main Content -->
@yield('scripts')
@include('layouts.footer')


</body>
</html>

