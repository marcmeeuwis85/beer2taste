@foreach($questions as $question)
    <h2>{{$question->name}}</h2>
    <p>{{$question->description}}</p>
    <canvas id="myChart{{$question->id}}" width="300" height="300"></canvas>
    <script>
        var ctx = document.getElementById('myChart{{$question->id}}').getContext('2d');
        var myChart{{$question->id}} = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["{!! $beers->implode('name', '","')!!}"],
                datasets: [{
                    label: '# of Votes',
                    data: [{{$beers->implode('id', ',')}}],
                    // backgroundColor: [
                    //     'rgba(255, 99, 132, 0.2)',
                    //     'rgba(54, 162, 235, 0.2)',
                    //     'rgba(255, 206, 86, 0.2)',
                    //     'rgba(75, 192, 192, 0.2)',
                    //     'rgba(153, 102, 255, 0.2)',
                    //     'rgba(255, 159, 64, 0.2)'
                    // ],
                    // borderColor: [
                    //     'rgba(255, 99, 132, 1)',
                    //     'rgba(54, 162, 235, 1)',
                    //     'rgba(255, 206, 86, 1)',
                    //     'rgba(75, 192, 192, 1)',
                    //     'rgba(153, 102, 255, 1)',
                    //     'rgba(255, 159, 64, 1)'
                    // ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endforeach

@foreach($questions as $question)
    <h2>{{$question->name}}</h2>
    <p>{{$question->description}}</p>
    <div class="card mb-3">
        <div class="card-body">
            @foreach($beers as $beer)
                <h3>{{$beer->name}}</h3>
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
                            <td>{{$result->answer}}</td>
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

            @endforeach
        </div>
    </div>
@endforeach