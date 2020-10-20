<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <!-- Header -->
    @include('Page_bits.header')
    <!-- / header -->
    <!-- Main content -->
    <main>
      <div class="container">
        @yield('main_content')
      </div>
    </main>
    <!-- / main content -->
    <!-- Footer -->
    <footer>
      <div id="left-foot">
        <img src="{{asset('images/logo.png')}}" alt="logo molisana">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="right-foot">
        <ul>

        </ul>
      </div>
    </footer>
    <!-- / footer -->
    <!-- Js-->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <!-- / Js-->
  </body>
</html>