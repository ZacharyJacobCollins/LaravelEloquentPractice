@extends('layout')

@section('content')
    <h1> {{ $card->title }} </h1>


    <!-- Echoes out all associated notes of a card  as a list -->
    <ul>    
        @foreach( $card->notes as $note ) 
            <li>
                {{ $note->body }}
            </li>
        @endforeach
    </ul>
@stop