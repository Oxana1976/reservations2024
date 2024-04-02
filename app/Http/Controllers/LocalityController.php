<?php

namespace App\Http\Controllers;

use App\Models\Locality;
use Illuminate\Http\Request;
use Locale;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $localities = Locality::all();
        //dump ($types[1]);die;    
        return view('locality.index',[
            'localities' => $localities,
            'resource' => 'villes',
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $locality = Locality::find($id);
        
        return view('locality.show',[
            'locality' => $locality,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $locality = Locality::find($id);
        
        return view('locality.edit',[
            'locality' => $locality,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
	   //Validation des données du formulaire
        $validated = $request->validate([
            'postal_code' => 'required|max:6',
            'locality' => 'required|max:60',
        ]);

	   //Le formulaire a été validé, nous récupérons localité à modifier
        $locality = Locality::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $locality->update($validated);

        return view('locality.show',[
            'locality' => $locality,
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
