@extends('layouts.main')

@section('title', 'Fiche d\'un rôle')

@section('content')
    <h1>{{ ucfirst($role->role) }}</h1>
    <ul>
    @foreach($role->users as $user)    
        <li>{{ $user->firstname }} {{ $user->lastname }}</li>
    @endforeach
    </ul>
        
    <nav><a href="{{ route('role.index') }}">Retour à l'index</a></nav>
@endsection