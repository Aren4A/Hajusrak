<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GetApiDataController extends Controller
{
    public function makeup(){

        $responseData = Http::get('https://ralf.ta22sink.itmajakas.ee/api/makeup')->json();
        return view('makeup.index', ['products' => $responseData]);
    }
}
