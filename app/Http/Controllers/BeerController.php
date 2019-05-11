<?php

namespace App\Http\Controllers;

use App\Beer;
use App\BeerTasting;
use App\Person;
use App\Question;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function view(BeerTasting $beerTasting, Person $person, Beer $beer)
    {
        $questions = $beerTasting->questions()->orderBy('position')->get()->groupBy('group');
        return view('beer.view', compact('beerTasting', 'person', 'beer', 'questions'));
    }

    public function submitAnswers(Request $request, BeerTasting $beerTasting, Person $person, Beer $beer)
    {
        // submit answers
        foreach($request->answers as $answerId => $answer){
            $beerTasting->results()->attach($answerId, ['person_id' => $person->id, 'answer' => $answer, 'beer_id' => $beer->id]);
        }

        // go to next question or results
        return $this->nextOrResults($beerTasting, $person, $beer);

    }

    private function nextOrResults(BeerTasting $beerTasting, Person $person, Beer $beer)
    {
        $currentPosition = $beerTasting->beers()->wherePivot('beer_id', $beer->id)->first()->pivot->position;
        $nextBeer = $beerTasting->beers()->wherePivot('position', '>', $currentPosition)->first();
        if($nextBeer){
            return redirect()->route('beers.view', [$beerTasting, $person, $nextBeer]);
        }
        return redirect()->route('beer-tasting.results', [$beerTasting]);
    }
}
