<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GetApiDataController extends Controller
{
    public function makeup()
    {

        $responseData = Http::get('https://ralf.ta22sink.itmajakas.ee/api/makeup')->json();

        return view('makeup.index', ['products' => $responseData]);
    }

    public function records()
    {

        $responseData = Http::get('https://hajusrakendus.ta22maarma.itmajakas.ee/api/records')->json();

        return view('records.index', ['products' => $responseData]);
    }

    public function beyonce()
    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.'BQDKCqbILYQLZeJrDpoyXxLWYy3RA_ie_tFryggojlQhXQbRqOYU16XaP-OncnImCvtbvqDWgKo58mZ0VWxtJ7E47pYcuFf1H8xwtk6ze_bEIgeKBcs',
        ])->get('https://api.spotify.com/v1/artists/6vWDO969PvNqNYHIOW5v0m/albums');

        $responseData = $response->json();

        return view('beyonce.index', ['objects' => $responseData]);
    }

    public function taylor()
    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.'BQDKCqbILYQLZeJrDpoyXxLWYy3RA_ie_tFryggojlQhXQbRqOYU16XaP-OncnImCvtbvqDWgKo58mZ0VWxtJ7E47pYcuFf1H8xwtk6ze_bEIgeKBcs',
        ])->get('https://api.spotify.com/v1/artists/06HL4z0CvFAxyc27GXpf02/top-tracks');

        $responseData = $response->json();

        return view('taylor.index', ['objects' => $responseData]);
    }
}
