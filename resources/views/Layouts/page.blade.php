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
      <div class="container">
        <div id="left-foot">
          <img src="{{asset('images/logo.png')}}" alt="logo molisana">
          <p>Ragione sociale: La Molisana S.P.A.<br>
          Sede legale: Contrada Colle delle Api, 100/A<br>
          86100 - Campobasso (CB)<br>
          Pec: lamolisana@pec.it<br>
          Tel: +39 0874 4981<br>
          Fax: +39 0874 629584<br>
          info@lamolisana.it (per segnalazioni degli utenti)<br>
          commerciale@lamolisana.it<br>
          export@lamolisana.it<br>
          numero verde 800818081<br>
          telefono 3801292455
        </p>
        </div>
        <div id="right-foot">
          <ul>

          </ul>
        </div>
      </div>
    </footer>
    <!-- / footer -->
    <!-- Js-->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <!-- / Js-->
  </body>
</html>