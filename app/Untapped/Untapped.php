<?php
namespace App\Untapped;
use GuzzleHttp\Client;

class Untapped{

    private $clientId;
    private $clientSecret;
    private $endPoint;
    private $accessToken;

    function __construct($endPoint = 'https://api.untappd.com/v4/')
    {
        $this->endPoint = $endPoint;
        $this->clientId = env('UNTAPPED_CLIENT_ID');
        $this->clientSecret = env('UNTAPPED_SECRET');
    }

    public function getAccessToken()
    {
        $returnUrl = "https://bierapp.test/untapped/return";
        $url = "https://untappd.com/oauth/authenticate/?client_id=" . $this->clientId . "&response_type=token&redirect_url=" . $returnUrl;
        echo $url;
    }

    public function searchBeer($keyword, $limit = 50, $offset = 0)
    {
        if(strlen($keyword) > 0){
            $url = $this->url('search/beer?q=' . $keyword . '&limit=' . $limit . '&offset=' . $offset);
            $client = new Client();
            try{
                $result = $client->get($url);
                $beers = collect(json_decode($result->getBody())->response->beers->items) ?? collect([]);
                return [
                    'success' => true,
                    'result' => $beers
                ];
            } catch(\Exception $e){
                return [
                    'success' => false,
                    'message' => 'Fout bij verbinden met Untapped, foutcode:'. $e->getCode()
                ];
            }
        }
    }

    private function url($url)
    {
        return $this->endPoint . $url . '&client_id='.  $this->clientId . '&client_secret=' . $this->clientSecret;
    }


}