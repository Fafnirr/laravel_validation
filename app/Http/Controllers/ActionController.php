<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;

class ActionController extends Controller
{
    public function ajout(Request $request) {
        $personnage = new personnage;
        $personnage->nom = $request->nom;
        $personnage->annee_de_creation = $request->annee_de_creation;
        $personnage->bd_affilie = $request->bd_affilie;
        $personnage->dessinateur = $request->dessinateur;
        $personnage->save();
        return redirect('/list');
    }

    public function suppPersonnage(Request $request) {
        Personnage::destroy($request->id);
        return redirect('/list');
    }

    public function majPersonnage(Request $request) {
        $personnage = Personnage::findOrFail($request->id);
        $personnage->nom = $request->nom;
        $personnage->annee_de_creation = $request->annee_de_creation;
        $personnage->bd_affilie = $request->bd_affilie;
        $personnage->dessinateur = $request->dessinateur;
        $personnage->save();
        return redirect('/list');
    }
}