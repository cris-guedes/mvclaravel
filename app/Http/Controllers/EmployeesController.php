<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employeesPages.index');
    }
    public function create()
    {

        return view('employeesPages.create');
    }
    public function createAction(Request $request){
     $nome =$request->input('nome');
     $telefone =$request->input('telefone');
     $cpf =$request->input('cpf');
     $cargo =$request->input('cargo');
    DB::insert('insert into employees (nome,telefone,cpf,cargo) values (?,?,?,?)',[$nome,$telefone,$cpf,$cargo]);



    }
    public function update()
    {

        return view('employeesPages.update');
    }
    public function updateAction(Request $request){
    $nome =$request->input('nome');
    $telefone =$request->input('telefone');
    $cpf =$request->input('cpf');
    $cargo =$request->input('cargo');
    $id=$request->input('id');
    DB::update('update employees set nome = ?, telefone = ?, cpf = ?, cargo = ? where id = ?',[$nome,$telefone,$cpf,$cargo,$id]);



    }
    public function destroy(Request $request)
    {
        $id=$request->input('id');
        DB::delete('delete from employees where id = ?',[$id]);


    }
}
