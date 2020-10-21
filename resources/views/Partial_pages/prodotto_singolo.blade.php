@extends('Layouts.page')

@section('main_content')
<main class="no-bg">
    <div class="container" id="product">
        <h1>{{$pasta["titolo"]}}</h1>
        <img src="{{$pasta["src-h"]}}" alt="">
        <img src="{{$pasta["src-p"]}}" alt="">
        <p>{!!$pasta["descrizione"]!!}</p>
    </div>
</main>
@endsection