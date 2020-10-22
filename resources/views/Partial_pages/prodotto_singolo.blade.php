@extends('Layouts.page')

@section('title')
    {{$pasta["titolo"]}}
@endsection

@section('main_content')
<main class="no-bg">
    <div class="container" id="product">
        <h1>{{$pasta["titolo"]}}</h1>
        <img src='{{$pasta["src-h"]}}' alt="">
        <img src='{{$pasta["src-p"]}}' alt="">
        <div class="text">{!!$pasta['descrizione']!!}</div>
    </div>

    @if($id > 0)
        <a href="{{route('prodotto', $id - 1)}}" class ="arrow" id="prev"><i class="fas fa-chevron-left"></i></a>
    @endif
    @if($id < ($length - 1))
        <a href="{{route('prodotto', $id + 1)}}" class ="arrow" id="next"><i class="fas fa-chevron-right"></i></a>
    @endif
</main>
@endsection