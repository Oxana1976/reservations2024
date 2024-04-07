@extends('layouts.main')

@section('title', 'Liste des prix')

@section('content')
    <h1>Liste des {{ $resource }}</h1>
    <ul>
        <li><a href="{{ route('price.create') }}">Ajouter</a></li>    
    </ul>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prices as $price)
            <tr>
                <td>{{ $price->type }}</td>
                <td>
                    <a href="{{ route('price.show', $price->id) }}">{{ $price->price }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection