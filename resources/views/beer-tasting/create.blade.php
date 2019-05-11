@extends('layouts.master')

@section('content')

    <form method="post" action="{{route('beer-tasting.store')}}">
        @csrf
        <h1>Bierproeverij</h1>
        <p>
            Start een nieuwe bierproeverij. Kies de biertjes die je tijdens de proeverij wilt proeven en kies de vragen
            die per biertje worden gesteld.
            <br/>Na het toevoegen van de bierproeverij wordt er een nieuwe unieke code gegenereeerd die de deelnemers
            kunnen gebruiken om deel te nemen aan de proeverij.
        </p>
        <hr/>
        <div class="form-group">
            <label for="name">Geef de bierproeverij een naam</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Geef een naam op" required>
        </div>
        <hr/>
        <div class="form-group">
            <label>Kies de deelnemende bieren</label>
            @foreach($beers as $beer)
                <div class="custom-control custom-switch">
                    <input name="beers[]" value="{{$beer->id}}" type="checkbox" class="custom-control-input" id="beer-{{$beer->id}}">
                    <label class="custom-control-label" for="beer-{{$beer->id}}">{{$beer->name}}</label>
                </div>
            @endforeach
        </div>

        <hr/>
        <div class="form-group">
            <label>Kies de deelnemende vragen</label>
            @foreach($questions as $question)
                <div class="custom-control custom-switch">
                    <input name="questions[]" value="{{$question->id}}" type="checkbox" class="custom-control-input" id="question-{{$question->id}}">
                    <label class="custom-control-label"
                           for="question-{{$question->id}}">{{$question->group . ' - ' . $question->name}}</label>
                </div>
            @endforeach
        </div>

        <hr/>
        <input type="submit" class="btn btn-success" value="Bierproeverij starten"/>

    </form>

@endsection