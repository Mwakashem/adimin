<?php

namespace App\Http\Controllers;

use App\Residentials;
use Illuminate\Http\Request;

class ResidentialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $Residentials = Residentials::latest()->get();
        return view('residentials.show', compact('Residentials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('residentials.addresidentials');
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
            'rooms'=>'required',
            'pimg'=>['required', 'image'],
            'price'=>'required',
            'area'=>'required',
            'beds'=>'required',
            'baths'=>'required',
        ]);

        $imagePath = request('pimg')->store('uploads', 'public');

        auth()->user()->residentials()->create([
            'title'  => $data['title'],
            'description'  => $data['description'],
            'street'  => $data['street'],
            'city'  => $data['city'],
            'county'  => $data['county'],
            'status'  => $data['status'],
            'type'  => $data['type'],
            'rooms'  => $data['rooms'],
            'pimg'  => $imagePath,
            'price'  => $data['price'],
            'area'  => $data['area'],
            'beds'  => $data['beds'],            
            'baths'  => $data['baths'],

        ]);

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Residentials  $residentials
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $residentials = Residentials::where('id', '=', $id)->first();
         return view('residentials.viewresidentials', compact('residentials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Residentials  $residentials
     * @return \Illuminate\Http\Response
     */
    public function edit(Residentials $residentials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Residentials  $residentials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residentials $residentials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Residentials  $residentials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $residentials = Residentials::where('id', '=', $id)->first();
                $residentials->delete();
        return redirect ('/');
    }
}
