Vraag #{{$loop->iteration}}<h4>{{$question->name}}</h4>
<div class="row">
    <div class="col-sm-12">
        <p>{{$question->description}}</p>
    </div>
</div>


@foreach($question->possibleAnswers() as $possibleAnswer)

    <div class="custom-control custom-radio">
        <input type="radio" value="{{$possibleAnswer}}" id="option-{{$question->id}}-{{$loop->iteration}}" name="answers[{{$question->id}}]" class="custom-control-input">
        <label class="custom-control-label" for="option-{{$question->id}}-{{$loop->iteration}}">{{$possibleAnswer}}</label>
    </div>

@endforeach