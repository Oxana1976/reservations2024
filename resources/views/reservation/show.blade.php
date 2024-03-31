@extends('layouts.main')

@section('title', 'Fiche d\'une reservation')

@section('content')
    <h1>{{ $reservation->status }} {{ $reservation->booking_date }}</h1>
    <nav><a href="{{ route('reservation.index') }}">Retour à l'index</a></nav>
@endsection