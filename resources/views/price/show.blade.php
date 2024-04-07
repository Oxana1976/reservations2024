@extends('layouts.main')

@section('title', 'Prix')

@section('content')
    <h1>{{ $price->type }} {{ $price->price }}€</h1>
    <div><a href="{{ route('price.edit' ,$price->id) }}">Modifier</a></div>
    <nav><a href="{{ route('price.index') }}">Retour à l'index</a></nav>
@endsection