@extends('layout.app')
@section('content')
    @foreach ($journals as $journal)
        <div class="card" id = "emotionsCard" style="width: 18rem;">
            <img  id = "emotionsImage" src="..." class="card-img-top" alt="{{$journal->emotion}}">
            <div class="card-body">
                <h5 class="card-title"> {{$journal->created_at}} </h5>
                <p class="card-text"> {{$journal->entry}}... </p>
                <a href="{{ route('showDetail', ['id' => $journal->id]) }}" class="btn btn-info">Show</a>
            </div>
        </div>
    @endforeach
@endsection