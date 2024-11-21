@extends('layout.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-secondary">Volver</a>
    <div class="details" id="cardShow">
        <img src="" alt="{{ $journal->emotion }}">
        <h4>{{ $journal->created_at }}</h4>
        <p>{{ $journal->entry }}</p>
    </div>
@endsection