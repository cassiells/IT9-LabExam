@extends('layout')

@section('content')

    <h1 class="mb-4">Characters</h1>

    <a href="{{ route('characters.create') }}" class="btn btn-primary mb-3">+ Add New Character</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach ($characters as $character)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $character->name }}</h5>
                <p class="card-text">
                    <strong>Power:</strong> {{ $character->power }}<br>
                    <strong>Universe:</strong> {{ $character->universe }}
                </p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('characters.edit', $character) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('characters.destroy', $character) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this character?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
