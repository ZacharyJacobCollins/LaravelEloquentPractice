@extends('layout')

@section('content')
    <h1>All Cards</h1>

    @foreach($cards as $card) 
        <div>
            <a href=" /cards/{{$card->id}}"><h1> {{ $card->title }} </h1></a>
        </div>
    @endforeach
<@stop>