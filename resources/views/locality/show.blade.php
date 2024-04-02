
@extends('layouts.main')

@section('title', 'Liste des localités')

@section('content')
    <h1>{{ $locality->postal_code }} {{ $locality->locality }}</h1>
    
    <ul>
    @foreach($locality->locations as $location)
        <li>{{ $location->designation }}</li>
    @endforeach
    </ul>
    <div><a href="{{ route('locality.edit' ,$locality->id) }}">Modifier</a></div>
    <nav><a href="{{ route('locality.index') }}">Retour à l'index</a></nav>
@endsection