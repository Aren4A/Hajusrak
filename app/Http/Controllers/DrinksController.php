<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('tooted.index', compact('drinks'));
        // Return Json Response
   /* return response()->json([
    'posts' => $drinks
 ],200); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tooted.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'size' => 'required',

        ],
            [
                'title.required' => 'Nõutav väli',
                'description.required' => 'Nõutav väli',
                'image.required' => 'Nõutav väli',
                'price.required' => 'Nõutav väli',
                'size.required' => 'Nõutav väli',
            ]);

        Drink::create($validated);

    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        //
    }
}
