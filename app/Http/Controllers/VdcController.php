<?php

namespace App\Http\Controllers;

use App\Vdc;
use Illuminate\Http\Request;

class VdcController extends Controller
{
    public function index(Vdc $vdc)
    {
        $title = "गाउँ विकास समिति";
        $vdcs = Vdc::orderBy('id','desc')->get();
        return view('vdc.index',compact('vdcs','vdc','title'));
    }

    public function store(Request $request)
    {
        Vdc::create($request->validate([
            'vdc' => 'required',
        ]));

        return redirect()->back()->with('success', 'New VDC successfully saved');
    }

    public function delete(Vdc $vdc)
    {
        $vdc->delete();
        return redirect()->back()->with('success', 'Selected VDC successfully removed');
    }

    public function edit(Vdc $vdc)
    {
        $title = "गाउँ विकास समिति";
        $vdcs = Vdc::orderBy('id','desc')->get();
        return view('vdc.index',compact('vdcs','vdc','title'));
    }

    public function update(Request $request, Vdc $vdc)
    {
        $vdc->update($request->validate([
            'vdc' => 'required',
        ]));

        return redirect()->route('vdc.index')->with('success', 'Selected VDC successfully updated');
    }
}
