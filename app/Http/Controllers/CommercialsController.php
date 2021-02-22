<?php

namespace App\Http\Controllers;

use App\Commercials;
use Illuminate\Http\Request;

class CommercialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $Commercials = Commercials::latest()->get();
        return view('commercials.show', compact('Commercials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commercials.addcommercials');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'street'=>'required',
            'city'=>'required',
            'county'=>'required',
            'status'=>'required',
            'type'=>'required',
            'pimg'=>['required', 'image'],
            'price'=>'required',
            'area'=>'required',
        ]);

        $imagePath = request('pimg')->store('uploads', 'public');

        auth()->user()->commercials()->create([
            'title'  => $data['title'],
            'description'  => $data['description'],
            'street'  => $data['street'],
            'city'  => $data['city'],
            'county'  => $data['county'],
            'status'  => $data['status'],
            'type'  => $data['type'],
            'pimg'  => $imagePath,
            'price'  => $data['price'],
            'area'  => $data['area'],

        ]);

        return redirect ('/commercials');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commercials  $commercials
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $commercials = Commercials::where('id', '=', $id)->first();
         return view('commercials.viewcommercials', compact('commercials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commercials  $commercials
     * @return \Illuminate\Http\Response
     */
    public function edit(Commercials $commercials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commercials  $commercials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commercials $commercials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commercials  $commercials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $commercials = Commercials::where('id', '=', $id)->first();
                $commercials->delete();
        return redirect ('/commercials');
    }
}
