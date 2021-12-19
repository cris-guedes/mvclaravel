<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        return view('clientsPages.index');
    }
    public function create(Request $request)
    {

        return view('clientsPages.create');
    }
    public function createAction(Request $request)
    {

    }
    public function update(Request $request)
    {

        return view('clientsPages.update');
    }
    public function updateAction(Request $request)
    {

    }
    public function destroy(Request $request)
    {


    }
}
