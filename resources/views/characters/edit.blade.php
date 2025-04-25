@extends('layout')

@section('content')
    <h2 class="mb-4">Edit Character</h2>

    <form action="{{ route('characters.update', $character) }}" method="POST">
        @csrf
        @method('PUT')
        @include('characters.form', ['character' => $character])
        <button class="btn btn-danger">Update Character</button>
        <a href="{{ route('characters.index') }}" class="btn btn-outline-danger">Cancel</a>
    </form>
@endsection
