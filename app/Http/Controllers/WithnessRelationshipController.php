<?php

namespace App\Http\Controllers;

use App\WithnessRelationship;
use App\Http\Requests\StoreWithnessRelationshipRequest;
use App\Http\Requests\UpdateWithnessRelationshipRequest;
use Doctrine\DBAL\Schema\Index;

class WithnessRelationshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WithnessRelationship $withnessRelationship)
    {
        if (!$withnessRelationship) {
            $withnessRelationship = new WithnessRelationship();
        }
        $withnessRelationships = WithnessRelationship::get();
        return view('withness-relationship.index', compact('withnessRelationships', 'withnessRelationship'));
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
     * @param  \App\Http\Requests\StoreWithnessRelationshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWithnessRelationshipRequest $request)
    {
        WithnessRelationship::create($request->validated());
        return redirect()
            ->back()
            ->with('success', 'Withness Relationship created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WithnessRelationship  $withnessRelationship
     * @return \Illuminate\Http\Response
     */
    public function show(WithnessRelationship $withnessRelationship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WithnessRelationship  $withnessRelationship
     * @return \Illuminate\Http\Response
     */
    public function edit(WithnessRelationship $withnessRelationship)
    {
        return $this->index($withnessRelationship);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWithnessRelationshipRequest  $request
     * @param  \App\WithnessRelationship  $withnessRelationship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWithnessRelationshipRequest $request, WithnessRelationship $withnessRelationship)
    {
        $withnessRelationship->update($request->validated());
        return redirect()
            ->route('withness-relationship.index')
            ->with('success', 'withness relationship updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WithnessRelationship  $withnessRelationship
     * @return \Illuminate\Http\Response
     */
    public function destroy(WithnessRelationship $withnessRelationship)
    {
        $withnessRelationship->delete();
        return redirect()
            ->back()
            ->with('success', 'withness Relationship Deleted');
    }
}
