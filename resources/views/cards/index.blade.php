@extends('layout')

@section('content')
    <h1>All Cards</h1>

    @foreach($cards as $card) 
        <div>
            <h1> {{ $card->title }} </h1>
        </div>
    @endforeach
<@stop>