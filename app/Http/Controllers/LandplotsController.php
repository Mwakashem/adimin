<?php

namespace App\Http\Controllers;

use App\Landplots;
use Illuminate\Http\Request;

class LandplotsController extends Controller
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
        $landplots = Landplots::latest()->get();
        return view('landplots.show', compact('landplots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('landplots.addlandplots');
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
            'county'=>'required',
            'status'=>'required',
            'type'=>'required',
            'pimg'=>['required', 'image'],
            'price'=>'required',
            'area'=>'required',
        ]);

        $imagePath = request('pimg')->store('uploads', 'public');

        auth()->user()->landplots()->create([
            'title'  => $data['title'],
            'description'  => $data['description'],
            'street'  => $data['street'],
            'county'  => $data['county'],
            'status'  => $data['status'],
            'type'  => $data['type'],
            'pimg'  => $imagePath,
            'price'  => $data['price'],
            'area'  => $data['area'],

        ]);

        return redirect ('/landplots');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landplots  $landplots
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $landplots = Landplots::where('id', '=', $id)->first();
         return view('landplots.viewlandplots', compact('landplots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landplots  $landplots
     * @return \Illuminate\Http\Response
     */
    public function edit(Landplots $landplots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landplots  $landplots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landplots $landplots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landplots  $landplots
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $landplots = Landplots::where('id', '=', $id)->first();
                $landplots->delete();
        return redirect ('/landplots');
    }
}
