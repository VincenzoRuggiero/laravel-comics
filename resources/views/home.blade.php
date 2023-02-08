@extends('layouts.app')

@section('main-content')
<div class="comics">
    <div class="container">
        <div class="row d-flex">
                 @foreach ($comics as $comic)
                 <div class="col-2 h-25">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                    <h5>{{ $comic['title'] }}</h5>
                </div>
                 @endforeach
        </div>
    </div>
</div>

@endsection