@extends('layout')

@section('content')
    <h2 class="mb-4">Edit Character</h2>

    <form action="{{ route('characters.update', $character) }}" method="POST">
        @csrf
        @method('PUT')
        
        @include('characters.form', ['character' => $character])

        <div class="d-flex justify-content-between">
            <button class="btn btn-success">Update Character</button>
            <a href="{{ route('characters.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
@endsection
