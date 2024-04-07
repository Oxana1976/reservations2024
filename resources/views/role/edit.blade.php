@extends('layouts.main')

@section('title', 'Modifier un rôle')

@section('content')
    <h2>Modifier un rôle</h2>

    <form action="{{ route('role.update' ,$role->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="role">Rôle</label>
            <input type="text" id="role" name="role" 
	       @if(old('role'))
                value="{{ old('role') }}" 
            @else
                value="{{ $role->role }}" 
            @endif
	           class="@error('role') is-invalid @enderror">

	@error('role')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

    

        <button>Modifier</button>
   <a href="{{ route('role.show',$role->id) }}">Annuler</a>
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

    <nav><a href="{{ route('role.index') }}">Retour à l'index</a></nav>
@endsection