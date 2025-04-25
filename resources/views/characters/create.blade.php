@extends('layout')

@section('content')
    <h2 class="mb-4">Add New Character</h2>

    <form action="{{ route('characters.store') }}" method="POST">
        @csrf
        @include('characters.form')

        <div class="d-flex justify-content-between">
            <button class="btn btn-primary">Add Character</button>
            <a href="{{ route('characters.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
@endsection
