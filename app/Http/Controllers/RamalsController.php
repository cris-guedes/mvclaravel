<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RamalsController extends Controller
{
    public function index()
    {
        return view('ramalsPages.index');
    }
    public function create()
    {

        return view('ramalsPages.create');
    }
    public function createAction(Request $request){
     $setor =$request->input('setor');
     $numero =$request->input('numero');
    DB::insert('insert into ramals (setor,numero) values (?,?)',[$setor,$numero]);
    }

    public function update()
    {

        return view('ramalsPages.update');
    }
    public function updateAction(Request $request){
    $setor =$request->input('setor');
    $numero =$request->input('numero');
    $id=$request->input('id');
    DB::update('update ramals set setor = ?, numero = ? where id = ?',[$setor,$numero,$id]);

    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        DB::delete('delete from ramals where id = ?',[$id]);
    }
}
