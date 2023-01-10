<?php

namespace App\Http\Controllers;

use App\Country;
use App\MotherTongue;
use App\Mysetting;
use App\Registaar;
use Illuminate\Http\Request;

class MotherTongueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MotherTongue::create($request->validate([
            'name' => 'required',
        ]));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Registaar $registaar,Country $country, $id)
    {
        $motherTongue = MotherTongue::find($id);
        $title = "Settings";
        $mysetting = Mysetting::first();
        $registaars = Registaar::orderBy('id','desc')->get();
        // if($mysetting){
        //     $mysetting = $mysetting->default_admin_name;
        // }
        return view('settings.index',compact('mysetting','title','registaars','registaar','country','motherTongue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MotherTongue::find($id)->update($request->validate([
            'name' => 'required',
        ]));

        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
