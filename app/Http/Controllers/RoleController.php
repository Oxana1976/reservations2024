<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();
        
        return view('role.index',[
            'roles' => $roles,
            'resource' => 'roles',
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
        $role = Role::find($id);
        
        return view('role.show',[
            'role' => $role,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::find($id);
        
        return view('role.edit',[
            'role' => $role,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
	   //Validation des données du formulaire
        $validated = $request->validate([
            'role' => 'required|max:30',
           
        ]);

	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
        $role = Role::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $role->update($validated);

        return view('role.show',[
            'role' => $role,
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
