@extends('layouts.main')

@section('title', 'Modifier une localité')

@section('content')
    <h2>Modifier une localité</h2>

    <form action="{{ route('locality.update' ,$locality->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="postal_code">Code Postal</label>
            <input type="number" id="postal_code" name="postal_code" 
	       @if(old('postal_code'))
                value="{{ old('postal_code') }}" 
            @else
                value="{{ $locality->postal_code}}" 
            @endif
	           class="@error('postal_code') is-invalid @enderror">

	@error('postal_code')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="locality">Nom</label>
            <input type="text" id="locality" name="locality" 
	       @if(old('locality'))
                value="{{ old('locality') }}" 
            @else
                value="{{ $locality->locality }}" 
            @endif
	           class="@error('locality') is-invalid @enderror">

	@error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('locality.show',$locality->id) }}">Annuler</a>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav><a href="{{ route('locality.index') }}">Retour à l'index</a></nav>
@endsection