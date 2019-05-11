<?php

namespace App\Http\Controllers;

use App\Beer;
use App\BeerTasting;
use App\Person;
use App\Question;
use Illuminate\Http\Request;

class BeerTastingController extends Controller
{
    public function create()
    {
        $beers = Beer::orderBy('name')->get();
        $questions = Question::orderBy('position')->get();
        return view('beer-tasting.create', compact('beers', 'questions'));
    }

    public function store(Request $request)
    {
        $beerTasting = new BeerTasting();
        $beerTasting->name = $request->name;
        $beerTasting->hash = uniqid();
        $beerTasting->status = 'new';
        $beerTasting->save();
        if ($request->questions) {
            $beerTasting->questions()->attach($request->questions);
        }
        if ($request->beers) {
            foreach($request->beers as $position => $beer){
                $beerTasting->beers()->attach($beer, ['position' => $position]);
            }
        }
        return redirect()->route('beer-tasting.index');
    }

    public function index()
    {
        $beerTastings = BeerTasting::orderByDesc('id')->get();
        return view('beer-tasting.index', compact('beerTastings'));
    }

    public function join(BeerTasting $beerTasting)
    {
        return view('beer-tasting.join', compact('beerTasting'));
    }

    public function addPerson(Request $request, BeerTasting $beerTasting)
    {
        if ($request->name && $request->email) {
            $person = Person::firstOrCreate(['email' => $request->email],
                [
                    'email' => $request->email,
                    'name' => $request->name
                ]
            );
            if($person){
                if($person->beerTastings()->where('beer_tasting_id', $beerTasting->id)->count() === 0){
                    $person->beerTastings()->attach($beerTasting->id);
                }
                return redirect()->route('beer-tasting.start', [$beerTasting, $person]);
            }
        }
    }

    public function start(BeerTasting $beerTasting, Person $person)
    {
        $beer = $beerTasting->beers()->orderBy('position')->first();
        if($beer){
            return redirect()->route('beers.view', [$beerTasting, $person, $beer]);
        }
    }

    public function results(BeerTasting $beerTasting)
    {
        $questions = $beerTasting->questions;
        $beers = $beerTasting->beers;

        $results = [];

        foreach($beers as $beer){
            $beerResults = $beerTasting->results()->wherePivot('beer_id', $beer->id)->get()->map(function($result){
                $personId = $result->pivot->person_id;
                $person = Person::find($personId);
                $result->person = $person;
                return $result;
            });
            $results[$beer->id] = $beerResults;
        }

        return view('beer-tasting.results', compact('beerTasting', 'questions', 'beers', 'results'));
    }
}
