@extends('layouts.main')

@section('title', 'Liste des représentations')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($representations as $representation)
    <li><strong>Spectacle:</strong><a href="{{ route('representation_show', $representation->id)}}">{{ $representation->show->title }}</a>

        @if($representation->location)
        - <span><strong>Lieu:</strong>{{ $representation->location->designation }}</span>
        @endif
        - <datetime>{{ substr($representation->when,0,-3) }}</datetime>
    </li>
    @endforeach
    </ul>
@endsection

