<?php

namespace App\Http\Controllers;

use App\Beer;
use App\Untapped\Untapped;
use Illuminate\Http\Request;

class UntappedController extends Controller
{
    public function search(request $request)
    {
        $keyword = $request->keyword;
        if(strlen($keyword) > 0){
            $untapped = new Untapped();
            $result = $untapped->searchBeer($keyword);
            if($result['success']){
                $beers = $result['result'];
                $this->saveBeers($beers);
                return view('untapped.search-result', compact('beers'));
            }
        }
        return view('untapped.error', ['message' => $result['message'] ?? 'Onbekend']);
    }

    private function saveBeers($beers)
    {
        foreach($beers as $beer){
            $data = [
                'name' => $beer->beer->beer_name,
                'image' => $beer->beer->beer_label,
                'content' => $beer->beer->beer_description,
                'untapped_id' => $beer->beer->bid,
                'untapped_brewery_id' => $beer->brewery->brewery_id,
                'brewery_name' => $beer->brewery->brewery_name,
            ];
            Beer::firstOrCreate(['untapped_id' => $beer->beer->bid], $data);
        }
    }
}
