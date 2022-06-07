<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cne' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'ville' => 'required',
            'email' => 'required'
        ]);

        $etudiant = new Etudiant;
        $etudiant->cne = $request->cne;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->ville = $request->ville;
        $etudiant->email = $request->email;
        $etudiant->save();

        return redirect()->route('etudiants.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
         return view('etudiants.show',compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
         return view('etudiants.edit',compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'cne' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'ville' => 'required',
            'email' => 'required'
        ]);

        $etudiant = Etudiant::find($id);
        $etudiant->cne = $request->cne;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->ville = $request->ville;
        $etudiant->email = $request->email;
        $etudiant->save();

        return redirect()->route('etudiants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant=Etudiant::find($id)->delete();
        return redirect()
        ->route('etudiants.index')
        ->with('success','eleve bien suprime');
    }
}
