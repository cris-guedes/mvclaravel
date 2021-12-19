<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        return view('productsPages.index');
    }
    public function create()
    {

        return view('productsPages.create');
    }
    public function createAction(Request $request){
     $nome =$request->input('nome');
     $categoria =$request->input('categoria');
     $valor =$request->input('valor');
     $marca = $request->input('marca');
     DB::insert('insert into products (nome,categoria,valor,marca) values (?,?,?,?)',[$nome,$categoria,$valor,$marca]);

    }
    public function update()
    {

        return view('productsPages.update');
    }
    public function updateAction(Request $request){
    $nome =$request->input('nome');
    $categoria =$request->input('categoria');
    $valor =$request->input('valor');
    $marca = $request->input('marca');
    $id=$request->input('id');
    DB::update('update products set nome = ?, categoria = ?, valor = ?, marca = ? where id = ?',[$nome,$categoria,$valor,$marca,$id]);


    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        DB::delete('delete from products where id = ?',[$id]);


    }
}
