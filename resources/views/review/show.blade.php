@extends('layouts.main')

@section('title', 'Reviews')

@section('content')
<p><strong>Spectacle:</strong> {{ $review->show->title }}</p>

       <p>{{$review->review}} </p>
       <p>Note : {{ $review->stars }} étoiles</p>
       <p>Avis par : {{ $review->user->firstname }} {{ $review->user->lastname }}</p>
      
    <nav><a href="{{ route('review.index') }}">Retour à l'index</a></nav>
@endsection


