<?php

namespace App\Http\Controllers;

use App\Properties;
use Illuminate\Http\Request;

class PropertiesController extends Controller
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
        $Properties = Properties::latest()->get();
        return view('index', compact('Properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Residentialscreate()
    {
        //
        return view('properties.addresidentials');
    }
    public function Commercialscreate()
    {
        //
        return view('properties.addcommercials');
    }
    public function Landplotscreate()
    {
        //
        return view('properties.addlandplots');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resistore(Request $request)
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
            'ptype'=>'required',
        ]);

        $imagePath = request('pimg')->store('uploads', 'public');

        auth()->user()->properties()->create([
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
            'ptype'  => $data['ptype'],

        ]);

        return redirect ('/');
    }
    public function commstore(Request $request)
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
            'ptype'=>'required',
        ]);

        $imagePath = request('pimg')->store('uploads', 'public');

        auth()->user()->properties()->create([
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
            'ptype'  => $data['ptype'],
        ]);

        return redirect ('/');
    }
    public function landstore(Request $request)
    {
        //
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'street'=>'required',
            'county'=>'required',
            'status'=>'required',
            'type'=>'required',
            'pimg'=>['required', 'image'],
            'price'=>'required',
            'area'=>'required',
            'ptype'=>'required',
        ]);

        $imagePath = request('pimg')->store('uploads', 'public');

        auth()->user()->properties()->create([
            'title'  => $data['title'],
            'description'  => $data['description'],
            'street'  => $data['street'],
            'county'  => $data['county'],
            'status'  => $data['status'],
            'type'  => $data['type'],
            'pimg'  => $imagePath,
            'price'  => $data['price'],
            'area'  => $data['area'],
            'ptype'  => $data['ptype'],
        ]);

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function resishow(Properties $properties)
    {
        // return view('resi', compact('properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function resiedit(Properties $properties)
    {
        return view('properties.resedit', compact('Properties'));

    }
    public function commedit(Properties $properties)
    {
        //
        return view('properties.commedit', compact('Properties'));

    }
    public function landedit(Properties $properties)
    {
        //
        return view('properties.landedit',compact('Properties'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Properties $properties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properties $properties)
    {
        //
        dd($properties);
        $properties->delete();
        return redirect ('/');
    }
}
