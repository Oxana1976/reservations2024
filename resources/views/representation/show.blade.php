@extends('layouts.main')

@section('title', 'Fiche d\'une représentation')

@section('content')
    <article>
        <h1>Représentation du {{ $date }} à {{ $time }}</h1>
        <p><strong>Spectacle:</strong> {{ $representation->show->title }}</p>

        <p><strong>Lieu:</strong> 
        @if($representation->location)
        {{ $representation->location->designation }}
        @elseif($representation->show->location)
        {{ $representation->show->location->designation }}
        @else
        <em>à déterminer</em>
        @endif
        </p>
        @foreach($representation->reservations as $reservation)
            <p>
                <strong>Prix :</strong> {{ $reservation->price->price }}<br>
                <strong>Quantité :</strong> {{ $reservation->pivot->quantity }}<br>
                <strong>Total :</strong> {{ $reservation->price->price * $reservation->pivot->quantity }} €<br>
                <strong>Statut :</strong> {{ $reservation->status }}
                
            </p>
        @endforeach

     
    </article>
    
    <nav><a href="{{ route('representation_index') }}">Retour à l'index</a></nav>
@endsection