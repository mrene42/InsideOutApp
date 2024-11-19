@extends('layout.app')
@section('content')
    @foreach ($journals as $journal)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="{{$journal->emotion}}">
            <div class="card-body">
                <h5 class="card-title"> {{$journal->created_at}} </h5>
                <p class="card-text"> {{$journal->entry}} </p>
            </div>
        </div>
    @endforeach
@endsection