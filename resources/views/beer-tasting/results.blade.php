@extends('layouts.master')
@section('content')
    <h1>Resultaten {{$beerTasting->name}}</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="nav-tab-questions" data-toggle="tab" href="#tab-questions" role="tab" aria-controls="tab-questions" aria-selected="true">Per vraag</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-tab-beers" data-toggle="tab" href="#tab-beers" role="tab" aria-controls="tab-beers" aria-selected="false">Per bier</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active mt-3" id="tab-questions" role="tabpanel" aria-labelledby="tab-questions">
            @include('beer-tasting.partials.results-tab-questions')
        </div>
        <div class="tab-pane fade mt-3" id="tab-beers" role="tabpanel" aria-labelledby="tab-beers">
            @include('beer-tasting.partials.results-tab-beers')
        </div>
    </div>
@endsection