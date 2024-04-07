@extends('layouts.main')

@section('title', 'Prix')

@section('content')
    <h1>{{ $price->type }} {{ $price->price }}€</h1>
    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection