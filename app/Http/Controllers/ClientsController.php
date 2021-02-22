<?php

namespace App\Http\Controllers;
use App\Residentials;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function index()
    {
        //
        $Residentials = Residentials::latest()->get();
        return view('clients.index', compact('Residentials'));
    }
    public function show($id)
    {
        //
        $residentials = Residentials::where('id', '=', $id)->first();
         return view('residentials.viewresidentials', compact('residentials'));
    }

}
