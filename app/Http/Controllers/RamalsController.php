<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RamalsController extends Controller
{
    public function index()
    {
        $ramals = DB::select('SELECT * FROM ramals');
        return view('ramalsPages.index', ['ramals' => $ramals]);
    }
    public function create()
    {

        return view('ramalsPages.create');
    }
    public function createAction(Request $request){
     $setor =$request->input('setor');
     $numero =$request->input('numero');
    DB::insert('INSERT into ramals (setor,numero) values (?,?)',[$setor,$numero]);
    return redirect('/ramals');
    }

    public function update($id)
    {
        $ramal = DB::select('SELECT * FROM ramals where id = ?',[$id]);
        return view('ramalsPages.update', ['ramal' => $ramal[0]]);
    }

    public function updateAction(Request $request){
    $setor =$request->input('setor');
    $numero =$request->input('numero');
    $id=$request->input('id');
    DB::update('UPDATE ramals set setor = ?, numero = ? where id = ?',[$setor,$numero,$id]);
    return redirect('/ramals');

    }
    public function destroy($id)
    {
        DB::delete('DELETE from ramals where id = ?',[$id]);
        return redirect('/ramals');
    }

}
