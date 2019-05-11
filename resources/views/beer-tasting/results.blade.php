@extends('layouts.master')
@section('content')
    <h1>Resultaten {{$beerTasting->name}}</h1>
    <hr/>
    @foreach($beers as $beer)
        <h2>{{$beer->name}}</h2>
        <div class="card mb-3">
            <div class="card-body">
                @foreach($questions as $question)
                    <h3>{{$question->name}}</h3>
                    <p>{{$question->description}}</p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Persoon</th>
                            <th>Antwoord</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results[$beer->id]->where('id', $question->id) as $result)
                            <tr>
                                <td>{{$result->person->name}}</td>
                                <td>{{$result->pivot->answer}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td>Gemiddeld</td>
                            <td>
                                @if($question->type == 'slide')
                                    {{ \App\Helpers\Helper::getPivotAverage($results[$beer->id]->where('id', $question->id),'answer')}}
                                @endif
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                    <hr/>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection