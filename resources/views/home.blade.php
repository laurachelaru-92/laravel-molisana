<!-- Settings PHP/Blade -->
@php

// Prendiamo la variabile $data dal config
$data = config("pasta");

// Creiamo 3 array con i diversi tipi di pasta
$lunga = [];
$corta = [];
$cortissima = [];

// Cicliamo in $data, mettiamo il valore dell'indice in un nuovo elemento ["id"] e riempiamo i 3 array dei diversi tipi di pasta
foreach ($data as $key => $dato) {
  $dato["id"] = $key;
  if ($dato["tipo"] === "lunga") {
    $lunga[] = $dato;
  } elseif ($dato["tipo"] === "corta") {
    $corta[] = $dato;
  } elseif ($dato["tipo"] === "cortissima") {
    $cortissima[] = $dato;
  }
}

@endphp
<!-- end settings PHP/Blade -->


@extends('Layouts.page')

@section('title')
    Pasta Molisana
@endsection

@section('main_content')
  @if (!empty($lunga))
  <h3>Le Lunghe</h3>
  <ul>
    @foreach($lunga as $pasta_lunga)
    <li>
      <img src="{{$pasta_lunga["src"]}}" alt="immagine pasta">
      <div class="overlay">
        <a href="prodotto/{{$pasta_lunga["id"]}}" class="text">
          <p>{{$pasta_lunga["titolo"]}}</p>
          <img src="{{asset('images/icon.svg')}}" alt="">
        </a>
      </div>
    </li>
    @endforeach
  </ul>
  @endif
  @if (!empty($corta))
  <h3>Le Corte</h3>
  <ul>
    @foreach($corta as $pasta_corta)
      <li>
        <img src="{{$pasta_corta["src"]}}" alt="immagine pasta">
        <div class="overlay">
          <a href="prodotto/{{$pasta_lunga["id"]}}" class="text">
            <p>{{$pasta_lunga["titolo"]}}</p>
            <img src="{{asset('images/icon.svg')}}" alt="">
          </a>
        </div>
      </li>
    @endforeach
  </ul>
  @endif
  @if (!empty($cortissima))
  <h3>Le Cortissime</h3>
  <ul>
    @foreach($cortissima as $pasta_cortissima)
      <li>
        <img src="{{$pasta_cortissima["src"]}}" alt="immagine pasta">
        <div class="overlay">
          <a href="prodotto/{{$pasta_lunga["id"]}}" class="text">
            <p>{{$pasta_lunga["titolo"]}}</p>
            <img src="{{asset('images/icon.svg')}}" alt="">
          </a>
        </div>
      </li>
    @endforeach
  </ul>
  @endif

@endsection
