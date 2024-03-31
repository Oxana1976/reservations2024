@extends('layouts.main')

@section('title', 'Liste des reservations')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Status</th>
                <th>Date de reservation</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->status }}</td>
                <td>
                    <a href="{{ route('reservation.show', $reservation->id) }}">{{ $reservation->booking_date }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection