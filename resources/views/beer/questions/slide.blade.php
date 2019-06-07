Vraag #{{$loop->iteration}}<h4>{{$question->name}}</h4>
<div class="row">
    <div class="col-sm-12">
        <p>
            <label for="amount">{{$question->description}}</label>
            <input type="hidden" id="answer-{{$question->id}}" readonly
                   style="border:0; color:#f6931f; font-weight:bold;" name="answers[{{$question->id}}]" value="3">
        </p>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <span class="float-left">{{$question->possibleAnswers()->start}}</span>
        <span class="float-right">{{$question->possibleAnswers()->end}}</span>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div id="slider-{{$question->id}}"></div>
    </div>
</div>
<script>
    $(function () {
        $("#slider-{{$question->id}}").slider({
            value: 3,
            min: 1,
            max: 10,
            step: 1,
            slide: function (event, ui) {
                $("#answer-{{$question->id}}").val(ui.value);
            }
        });
        jQuery("#slider-{{$question->id}}").draggable();
    });
</script>

