<?php

namespace App\Http\Controllers\Admin;

use App\Models\Centre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentreController extends Controller
{
    //
    public function index()
    {
        $centre = Centre::all();

        return view('admin.centre.index',compact('centre'));
    }

    public function insert(Request $request)
    {
        $centre  = new Centre();
        $centre->num_centre = $request->input('num_centre');
        $centre->nom_centre = $request->input('nom_centre');
        $centre->ville_centre = $request->input('ville_centre');
        $centre->save();
        return response()->json(['status' => $centre->nom_centre . " ajouté avec succès!"]);
    }

    public function destroy($id)
    {
        $centre = Centre::find($id);
        $centre->delete();
        return back()->with('status',"Centre examen supprimé avec succès!");
    }

    public function edit(Request $request , $id)
    {
        $centre = Centre::find($id);
        $centre->num_centre = $request->input('num_centre');
        $centre->nom_centre = $request->input('nom_centre');
        $centre->ville_centre = $request->input('ville_centre');
        $centre->update();
    }
}
