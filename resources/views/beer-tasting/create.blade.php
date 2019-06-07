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

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>Kies de deelnemende bieren</label>
                    <input type="text" name="keyword" class="form-control" id="keyword" placeholder="Zoek een bier"
                           required>
                    <button type="button" id="search-beer" class="btn btn-success float-right mt-3">Zoeken</button>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="modal-search-result" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Zoekresultaten</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul id="beers" class="sortable-list mt-3">

                </ul>
            </div>
        </div>

        <hr class="ui-helper-clearfix"/>
        <div class="form-group">
            <label>Kies de deelnemende vragen</label>
            @foreach($questions as $question)
                <div class="custom-control custom-switch">
                    <input name="questions[]" value="{{$question->id}}" type="checkbox" class="custom-control-input"
                           id="question-{{$question->id}}">
                    <label class="custom-control-label"
                           for="question-{{$question->id}}">{{$question->group . ' - ' . $question->name}}</label>
                </div>
            @endforeach
        </div>

        <hr/>
        <input type="submit" class="btn btn-success" value="Bierproeverij starten"/>

    </form>

@endsection

@section('scripts')
    <script>
        $(function () {
            $('#search-beer').click(function () {
                let keyword = $('#keyword').val();
                if (keyword.length > 1) {
                    $('#modal-search-result').find('.modal-body').html('<p>Er wordt gezocht...</p>');
                    $('#modal-search-result').modal('show');
                    $.post('{{route('untapped.search')}}', {keyword: keyword}, function (result) {
                        $('#modal-search-result').find('.modal-body').html(result);
                    });
                }
                return false;
            });
            $('#keyword').keypress(function(e){
                if(e.which === 13){
                    $('#search-beer').click();
                    return false;
                }
            });

            $('#beers').sortable();
        })
    </script>
@append

<style>
    body.dragging, body.dragging * {
        cursor: move !important;
    }

    .dragged {
        position: absolute;
        opacity: 0.5;
        z-index: 2000;
    }

    .sortable-list{
        padding: 0;
        list-style: none;
        margin: 0;
    }

    .sortable-list li{
        padding: 10px;
        background: #fff;
        border: 1px solid #ccc;
    }

    .sortable-list li.placeholder {
        position: relative;
        background: #fff;
    }
    .sortable-list li.placeholder:before {
        position: absolute;
    }
</style>