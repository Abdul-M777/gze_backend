@extends('layouts.app')

@section('content')
    <h1>Top Rated Games</h1>
    <ul>
        @foreach($games as $game)
            <li>{{ $game->name }} (Rating: {{ $game->rating }})</li>
        @endforeach
    </ul>
@endsection
