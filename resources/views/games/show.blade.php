@extends('layouts.app')

@section('content')
    <h1>{{ $game->name }}</h1>
    <p>{{ $game->summary }}</p>
    <p>Rating: {{ $game->rating }}</p>
@endsection
