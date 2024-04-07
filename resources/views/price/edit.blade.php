@extends('layouts.main')

@section('title', 'Modifier un prix')

@section('content')
    <h2>Modifier un prix</h2>

    <form action="{{ route('price.update' ,$price->id) }}" method="post">

    @csrf
        @method('PUT')
        <div>
            <label for="price">Prix</label>
            <input type="number" id="price" name="price" 
	       @if(old('price'))
                value="{{ old('price') }}" 
             
            @endif
	           class="@error('price') is-invalid @enderror">

	@error('price')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type" 
	       @if(old('type'))
                value="{{ old('type') }}" 
           
            @endif
	           class="@error('type') is-invalid @enderror">

            @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="start_date">Date de début</label>
            <input type="date" id="start_date" name="start_date"
            @if(old('start_date'))
                value="{{ old('start_date') }}"
            @endif
                class="@error('start_date') is-invalid @enderror">

            @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="start_date">Date de fin</label>
            <input type="date" id="end_date" name="end_date"
            @if(old('end_date'))
                value="{{ old('end_date') }}"
            @endif
                class="@error('end_date') is-invalid @enderror">

            @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('price.show',$price->id) }}">Annuler</a>
       
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

    <nav><a href="{{ route('price.index') }}">Retour à l'index</a></nav>
@endsection