<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index()
    {
        return view('clientsPages.index');
    }
    public function create()
    {

        return view('clientsPages.create');
    }
    public function createAction(Request $request)
    {
        $nome =$request->input('nome');
        $telefone =$request->input('telefone');
        $cpf =$request->input('cpf');
        DB::insert('insert into clients (nome,telefone,cpf) values (?,?,?)',[$nome,$telefone,$cpf]);

    }
    public function update()
    {

        return view('clientsPages.update');
    }
    public function updateAction(Request $request)
    {
        $nome =$request->input('nome');
        $telefone =$request->input('telefone');
        $cpf =$request->input('cpf');
        $id=$request->input('id');
        DB::update('update clients set nome = ?, telefone = ?, cpf = ? where id = ?',[$nome,$telefone,$cpf,$id]);

    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        DB::delete('delete from clients where id = ?',[$id]);


    }
}
