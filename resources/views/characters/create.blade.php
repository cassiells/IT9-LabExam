@extends('layout')

@section('content')
    <h2 class="mb-3">Add New Character</h2>

    <form action="{{ route('characters.store') }}" method="POST">
        @csrf
        @include('characters.form')
        <button class="btn btn-dark">Add Character</button>
        <a href="{{ route('characters.index') }}" class="btn btn-outline-secondary">Cancel</a>
    </form>
@endsection