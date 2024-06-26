<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations = Location::all();
        
        return view('location.index',[
            'locations' => $locations,
            'resource' => 'lieux',
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
        $location = Location::find($id);
        
        return view('location.show',[
            'location' => $location,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location = Location::find($id);
        
        return view('location.edit',[
            'location' => $location,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
	   //Validation des données du formulaire
        $validated = $request->validate([
            'designation' => 'required|max:60',
            'address' => 'required|max:255',
            'website' => 'required|url:http,https',
            'phone' => 'required|max:30',
        ]);

	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
        $location = Location::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $location->update($validated);

        return view('location.show',[
            'location' => $location,
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
