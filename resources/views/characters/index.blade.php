@extends('layout')

@section('content')
    
    <h1 class="mb-4">Character Dictonary</h1>

    <a href="{{ route('characters.create') }}" class="btn btn-dark mb-3">+ Create List Character</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($characters as $character)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $character->name }}</h5>
                <p class="card-text">Power: {{ $character->power }}<br>Universe: {{ $character->universe }}</p>
                <a href="{{ route('characters.edit', $character) }}" class="btn btn-sm btn-outline-dark">Edit</a>
                <form action="{{ route('characters.destroy', $character) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Are you sure you want to delete this info?')" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
