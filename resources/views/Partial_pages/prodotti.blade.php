{{-- @dd($pasta); --}}

@extends('Layouts.page')

@section('title')
    Prodotti
@endsection

@section('main_content')
    <main>
        <div>
            @foreach ($pasta as $key => $prodotto)
                @if (!empty($key))
                    <h3>{{$prodotto[0]["categoria"]}}</h3>
                    <ul>
                        @foreach($prodotto as $item)
                            <li>
                                <img src="{{$item["src"]}}" alt="immagine pasta">
                                <div class="overlay">
                                    <a href="{{route('show'.$item["id"])}}" class="text">
                                        <p>{{$item["titolo"]}}</p>
                                        <img src="{{asset('images/icon.svg')}}" alt="">
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>          
                @endif
            @endforeach
        </div>
    </main>
@endsection

