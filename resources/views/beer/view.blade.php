@extends('layouts.master')

@section('content')

    <form method="post">
        @csrf
        <h1>{{$beer->brewery_name . ' - ' .$beer->name}}</h1>
        <p>{{$beer->content}}</p>
        <img src="{{$beer->image}}" alt="{{$beer->brewery_name . ' - ' .$beer->name}}">
        <hr>
        @foreach($questions as $group => $questions)
            <h2>{{ucfirst($group)}}</h2>
            <div class="card mb-3">
                <div class="card-body">
                    @foreach($questions as $question)
                        @include('beer.questions.' . $question->type, $question)
                        <hr/>
                    @endforeach
                </div>
            </div>
        @endforeach
        <div class="row mt-2 mb-4">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-success" value="Opslaan"/>
            </div>
        </div>
    </form>
@endsection