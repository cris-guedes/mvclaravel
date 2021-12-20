<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = DB::select('SELECT * FROM clients');
        return view('clientsPages.index', ['clients' => $clients]);

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
        return redirect('/clients');
    }
    public function update($id)
    {
        $client = DB::select('SELECT * FROM clients where id = ?',[$id]);
        return view('clientsPages.update', ['client' => $client[0]]);
    }

    public function updateAction(Request $request)
    {
        $nome =$request->input('nome');
        $telefone =$request->input('telefone');
        $cpf =$request->input('cpf');
        $id=$request->input('id');
        DB::update('UPDATE clients set nome = ?, telefone = ?, cpf = ? where id = ?',[$nome,$telefone,$cpf,$id]);
        return redirect('/clients');
    }
    public function destroy($id)
    {
        DB::delete('DELETE from clients where id = ?',[$id]);
        return redirect('/clients');
    }

}
