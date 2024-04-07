<?php

namespace App\Http\Controllers;
use App\Models\Price;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $prices = Price::all();
        
        return view('price.index',[
            'prices' => $prices,
            'resource' => 'prices',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (!Gate::allows('create-price')) {
            abort(403);
        }
        return view('price.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         //Validation des données du formulaire
         $validated = $request->validate([
            'type' => 'required|max:30',
            'price' => 'nullable|numeric|between:0,99999999.99',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',

        ]);

	   //Le formulaire a été validé, nous créons un nouvel artiste à insérer
        $price = new Price();

        //Assignation des données et sauvegarde dans la base de données
        $price->type = $validated['type'];
        $price->price = $validated['price'];
        $price->start_date = $validated['start_date'];
        $price->end_date = $validated['end_date'];

        $price->save();

        return redirect()->route('price.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $price = Price::find($id);
        
        return view('price.show',[
            'price' => $price,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        if (!Gate::allows('create-price')) {
            abort(403);
        }
        $price = Price::find($id);
        
        return view('price.edit',[
            'price' => $price,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
           //Validation des données du formulaire
           $validated = $request->validate([
            'type' => 'required|max:30',
            'price' => 'nullable|numeric|between:0,99999999.99',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',

        ]);

	    $price = Price::find($id);

        $price->update($validated);

        return view('price.show',[
            'price' => $price,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
