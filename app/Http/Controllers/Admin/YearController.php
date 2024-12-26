<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annee;
use Illuminate\Http\Request;

class YearController extends Controller
{
    //
    public function index()
    {
        $year = Annee::all();
        return view('admin.year.index',compact('year'));
    }

    public function insert(Request $request)
    {
        $year = new Annee();
        $year->annee_obtention = $request->input('session');
        $year->save();
        return response()->json(['status' => $year->annee_obtention . " ajouté avec succès!"]);
    }

    public function destroy($id)
    {
        $year = Annee::find($id);
        $year->delete();
        return back()->with('status','Session supprimée avec succès!');
    }
}
