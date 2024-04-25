<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drinks = Drink::all();

        return view('tooted.index', compact('drinks'));
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
    public function store(Request $request): RedirectResponse
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

        return redirect(route('drinks.index'));
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
