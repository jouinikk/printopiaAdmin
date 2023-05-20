<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  @include('dash.layouts.head')
</head>

<body>
  <div class="wrapper">
    @include('dash.layouts.main-sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @include('dash.layouts.main-navbar')
      <!-- End Navbar -->

      @yield('content') 
      <!-- footer section -->
      @include('dash.layouts.footer')
      @include('dash.layouts.footer-scripts')
      <!-- footer section -->
    </div>
  </div>

</body>

</html>
