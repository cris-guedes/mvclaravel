<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = DB::select('SELECT * FROM products');
        return view('productsPages.index', ['products' => $products]);
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
     DB::insert('INSERT into products (nome,categoria,valor,marca) values (?,?,?,?)',[$nome,$categoria,$valor,$marca]);
        return redirect('/products');
    }
    public function update($id)
    {
        $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);
        return view('productsPages.update', ['product' => $product[0]]);

    }
    public function updateAction(Request $request){
    $nome =$request->input('nome');
    $categoria =$request->input('categoria');
    $valor =$request->input('valor');
    $marca = $request->input('marca');
    $id=$request->input('id');
    DB::update('UPDATE products set nome = ?, categoria = ?, valor = ?, marca = ? where id = ?',[$nome,$categoria,$valor,$marca,$id]);
    return redirect('/products');

    }
    public function destroy($id)
    {

        DB::delete('delete from products where id = ?',[$id]);
        return redirect('/products');


    }
}
