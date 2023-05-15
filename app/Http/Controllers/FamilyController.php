<?php

namespace App\Http\Controllers;

use App\Family;
use App\MigrationCertificate;
use App\Mysetting;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MigrationCertificate $migrationCertificate, Family $family)
    {
        // $families = $migrationCertificate->families()->get();
        // return view('migration-notice.family', compact('migrationCertificate', 'families', 'family'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MigrationCertificate $migrationCertificate, Request $request)
    {
        $migrationCertificate->families()->create(
            $request->validate([
                'name' => ['required'],
                'birthplace' => ['required'],
                'citizenship' => ['nullable'],
                'age' => ['required'],
                'permanent_address' => ['nullable'],
                'temporary_address' => ['nullable'],
                'education' => ['required'],
                'religion' => ['required'],
                'gender' => ['required'],
                'mothertongue' => ['required'],
                'description' => ['nullable'],
            ]),
        );
        return redirect()->route('migration.add-family', $migrationCertificate)->with('success', 'Family Member added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MigrationCertificate $migrationCertificate, Family $family)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family, MigrationCertificate $migrationCertificate)
    {

        $families = $migrationCertificate->families()->get();
        return view('migration-notice.family', compact('migrationCertificate', 'families', 'family'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Family $family)
    {

        $family->update($request->validate([
            'name' => ['required'],
            'birthplace' => ['required'],
            'citizenship' => ['required'],
            'age' => ['required'],
            'permanent_addres' => ['nullable'],
            'temporary_address' => ['nullable'],
            'education' => ['required'],
            'religion' => ['required'],
            'gender' => ['required'],
            'mothertongue' => ['required'],
            'description' => ['nullable'],
        ]));
        return redirect()->back()->with('success', 'Family Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {
        $family->delete();
        return redirect()->back()->with('success', 'Family Member deleted successfully');
    }
}
