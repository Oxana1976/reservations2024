@extends('layouts.main')

@section('title', 'Liste des reviews')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Show</th>
                <th>Stars</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td>{{ $review->show->title }}</td>
                <td>
                    <a href="{{ route('review.show', $review->id) }}">{{ $review->stars }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection