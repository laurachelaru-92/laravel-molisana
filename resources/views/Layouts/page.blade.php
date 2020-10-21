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
    @yield('main_content')
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
            <h3>Pastificio</h3>
            <li><a href="#">Il Pastificio</a></li>
            <li><a href="#">Grano decorticato a pietra</a></li>
            <li><a href="#">Il Molise c'è</a></li>
            <li><a href="#">Filiera Integrata</a></li>
            <li><a href="#">100 anni di pasta</a></li>
            <li><a href="#">Sartoria della pasta</a></li>
            <li><a href="#">Spaghetto Quadrato</a></li>
            <li><a href="#">Le Persone</a></li>
          </ul>
          <ul>
            <h3>Collezione da chef</h3>
            <li><a href="#">Collezione da Chef</a></li>
            <li><a href="#">Grandi Cucine</a></li>
            <li><a href="#">Biologiche</a></li>
            <li><a href="#">Quadrate</a></li>
          </ul>
          <ul>
            <h3>Prodotti</h3>
            <li><a href="#">Le Classiche</a></li>
            <li><a href="#">Le Integrali</a></li>
            <li><a href="#">Le Speciali</a></li>
            <li><a href="#">Le Biologiche</a></li>
            <li><a href="#">Le Gluten-Free</a></li>
            <li><a href="#">Le Semole</a></li>
            <li><a href="#">Le Extra di Lusso</a></li>
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