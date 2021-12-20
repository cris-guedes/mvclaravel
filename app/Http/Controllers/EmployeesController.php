<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = DB::select('SELECT * FROM employees');
        return view('employeesPages.index', ['employees' => $employees]);
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
    return redirect('/employees');


    }
    public function update($id)
    {
        $employee = DB::select('SELECT * FROM employees where id = ?',[$id]);
        return view('employeesPages.update', ['employee' => $employee[0]]);
    }

    public function updateAction(Request $request){
    $nome =$request->input('nome');
    $telefone =$request->input('telefone');
    $cpf =$request->input('cpf');
    $cargo =$request->input('cargo');
    $id=$request->input('id');
    DB::update('UPDATE employees set nome = ?, telefone = ?, cpf = ?, cargo = ? where id = ?',[$nome,$telefone,$cpf,$cargo,$id]);

    return redirect('/employees');

    }
    public function destroy($id)
    {
        DB::delete('DELETE from employees where id = ?',[$id]);
        return redirect('/employees');
    }

}
