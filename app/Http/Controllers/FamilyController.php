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
        $families = Family::orderBy('name')->paginate(50);
        return view('migration-notice.family-index', compact('families'));
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
                'age' => ['nullable'],
                'permanent_address' => ['nullable'],
                'temporary_address' => ['nullable'],
                'education' => ['nullable'],
                'religion' => ['nullable'],
                'gender' => ['required'],
                'mothertongue' => ['nullable'],
                'description' => ['nullable'],
                'relationship' => ['nullable'],
            ]),
        );
        return redirect()
            ->back()
            ->with('success', 'Family Member added successfully');
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
        $family->update(
            $request->validate([
                'name' => ['required'],
                'birthplace' => ['required'],
                'citizenship' => ['nullable'],
                'age' => ['nullable'],
                'permanent_address' => ['nullable'],
                'temporary_address' => ['nullable'],
                'education' => ['nullable'],
                'religion' => ['nullable'],
                'gender' => ['required'],
                'mothertongue' => ['nullable'],
                'description' => ['nullable'],
                'relationship' => ['nullable'],
            ]),
        );
        $migrationCertificate = MigrationCertificate::findOrFail($family->migration_certificate_id);

        return redirect()->route('migration.edit', $migrationCertificate);
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
        return redirect()
            ->back()
            ->with('success', 'Family Member deleted successfully');
    }

    public function filter(Request $request)
    {
        $families = new Family();
        if ($request->name) {
            $families = $families->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->gender) {
            $families = $families->where('gender', $request->gender);
        }

        if ($request->relationship) {
            $families = $families->where('relationship', $request->relationship);
        }
        if ($request->birthplace) {
            $families = $families->where('birthplace', 'like', '%' . $request->birthplace . '%');
        }

        if ($request->citizenship) {
            $families = $families->where('citizenship', $request->citizenship);
        }
        if ($request->age) {
            $families = $families->where('age', $request->age);
        }
        if ($request->education) {
            $families = $families->where('education', $request->education);
        }
        if ($request->religion) {
            $families = $families->where('religion', $request->religion);
        }
        if ($request->mothertongue) {
            $families = $families->where('mothertongue', $request->mothertongue);
        }

        if ($request->permanent_address) {
            $families = $families->where('permanent_address', 'like', '%' . $request->permanent_address . '%');
        }
        if ($request->temporary_address) {
            $families = $families->where('temporary_address', 'like', '%' . $request->temporary_address . '%');
        }

        $families = $families->orderBy('id', 'desc')->paginate(50);
        $families->appends(request()->except('page'));
        return view('migration-notice.family-index', compact('families'));
    }
}
