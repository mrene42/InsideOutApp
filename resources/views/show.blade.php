@extends('layout.app')

@section('content')
    <div class="details" id="cardShow">
        <img src="" alt="{{ $journal->emotion }}">
        <h4>{{ $journal->created_at }}</h4>
        <p>{{ $journal->entry }}</p>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection