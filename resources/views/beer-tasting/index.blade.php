@extends('layouts.master')
@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Aangemaakt op</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($beerTastings as $beerTasting)
            <tr>
                <td>{{$beerTasting->name}}</td>
                <td>{{\Carbon\Carbon::parse($beerTasting->created_at)->toFormattedDateString()}}</td>
                <td>
                    <div class="btn-group-sm">
                        <a href="{{route('beer-tasting.join', $beerTasting->id)}}" class="btn btn-secondary col-sm-12 col-md-4">Meedoen</a>
                        <a href="{{route('beer-tasting.results', $beerTasting->id)}}" class="btn btn-success col-sm-12 col-md-4">Resultaten</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection