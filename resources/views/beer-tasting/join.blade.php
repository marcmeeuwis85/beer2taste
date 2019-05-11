@extends('layouts.master')

@section('content')

    <form method="post" action="{{route('beer-tasting.addPerson', $beerTasting)}}">
        @csrf
        <h1>Meedoen met bierproeverij {{$beerTasting->name}}</h1>
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Geef een naam op" required>
        </div>
        <div class="form-group">
            <label for="name">E-mailadres</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Geef een e-mailadres op" required>
        </div>
        <hr/>
        <input type="submit" class="btn btn-success" value="Meedoen"/>
    </form>
@endsection