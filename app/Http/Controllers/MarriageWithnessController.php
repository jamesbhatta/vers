<?php

namespace App\Http\Controllers;

use App\Marriage;
use App\MarriageWithness;
use Illuminate\Http\Request;

class MarriageWithnessController extends Controller
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
    public function create(Marriage $marriage, MarriageWithness $marriageWithness = null)
    {
        if (!$marriageWithness) {
            $marriageWithness = new MarriageWithness();
        }
        $marriageWithnesss = $marriage->marriageWithness()->get();
        return view('marriage-notice.withness',compact('marriage','marriageWithnesss','marriageWithness'));
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Marriage $marriage, Request $request)
    { 
        $marriage->marriageWithness()->create(
            $request->validate([
                'relative_name'=>'required',
                'relationship'=>'required',
                'relative_address'=>'nullable',
                'date'=>'nullable',
            ]),
        );
        return redirect()->route('marriageWithness.create', $marriage)->with('success', 'Withness added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MarriageWithness  $marriageWithness
     * @return \Illuminate\Http\Response
     */
    public function show(MarriageWithness $marriageWithness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MarriageWithness  $marriageWithness
     * @return \Illuminate\Http\Response
     */
    public function edit(Marriage $marriage, MarriageWithness $marriageWithness)
    {
        return $this->create($marriage, $marriageWithness);
        // return view('migration-notice.family', compact('migrationCertificate', 'marriage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MarriageWithness  $marriageWithness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarriageWithness $marriageWithness)
    {
        $marriageWithness->update(
            $request->validate([
                'relative_name'=>'required',
                'relationship'=>'required',
                'relative_address'=>'nullable',
                'date'=>'nullable',
            ]),
        );
        $marriage = $marriageWithness->marriage_id;
        return redirect()->route('marriageWithness.create', $marriage)->with('success', 'Withness added successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MarriageWithness  $marriageWithness
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarriageWithness $marriageWithness)
    {
        $marriageWithness->delete();
        return redirect()->back()->with('success', 'Withness deleted successfully');
        

    }
}
