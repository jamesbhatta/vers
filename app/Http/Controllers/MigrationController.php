<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Family;
use App\MigrationCertificate;
use App\Mysetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PDF;


class MigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mysetting=Mysetting::get();
        $family = Family::get();
        $migrationCertificates = MigrationCertificate::get();
        return view('migration-notice.index', compact('migrationCertificates', 'family', 'mysetting'));
    }
    public function filter(Request $request)
    {
        $migrationCertificates = DB::table('migration_certificates');

        if ($request->reg_number) {
            $migrationCertificates = $migrationCertificates->where('reg_number', $request->reg_number);
        }

        if ($request->entry_date) {
            $migrationCertificates = $migrationCertificates->where('entry_date', 'like', '%' . $request->entry_date . '%');
        }

        if ($request->migration_date) {
            $migrationCertificates = $migrationCertificates->where('migration_date', 'like', '%' . $request->migration_date . '%');
        }

        $old = $request;

        $migrationCertificates = $migrationCertificates->get();
        return view('migration-notice.index', compact('migrationCertificates', 'old'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MigrationCertificate $migrationCertificate)
    {
        return view('migration-notice.form', compact('migrationCertificate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMigrationRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function add_family(MigrationCertificate $migrationCertificate, Family $family)
    {

        $families = $migrationCertificate->families()->get();
        return view('migration-notice.family', compact('migrationCertificate', 'families', 'family'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Migration  $migration
     * @return \Illuminate\Http\Response
     */
    public function show(MigrationCertificate $migrationCertificate, Family $family)
    {
        $family = Family::get();
        $families = $migrationCertificate->families()->get();
        return view('migration-notice.show', compact('migrationCertificate','families', 'family'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Migration  $migration
     * @return \Illuminate\Http\Response
     */
    public function edit(MigrationCertificate $migrationCertificate)
    {
        return view('migration-notice.form', compact('migrationCertificate'));
    }


    public function store(MigrationCertificate $migrationCertificate, Request  $request)
    {
        // return $request;
       $data = $request->validate([
            'after_province' => ['required'],
            'after_municipality' => ['required'],
            'after_district' => ['required'],
            'after_vdc' => ['nullable'],
            'after_houseno' => ['nullable', 'integer'],
            'after_village' => ['required'],
            'after_ward' => ['required', 'integer'],

            'province' => ['required'],
            'municipality' => ['required'],
            'district' => ['required'],
            'vdc' => ['nullable'],
            'administrator' => ['required'],
            'reg_number' => ['required'],
            'entry_date' => ['required'],

            'before_province' => ['required'],
            'before_municipality' => ['required'],
            'before_district' => ['required'],
            'before_vdc' => ['nullable'],
            'before_village' => ['required'],
            'before_houseno' => ['nullable', 'integer'],
            'before_ward' => ['required', 'integer'],
            'migration_reason' => ['required'],
            'migration_date' => ['required'],
            'relative_name' => ['required'],
            'relationship' => ['required'],
            'relative_address' => ['required'],
            'date' => ['required'],
            'file' => ['nullable'],
        ]);


        if ($request->hasFile('file')) {
            $fileName = $request->reg_number . "-" . Str::slug($request->province) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName);
        }
        // return $data;
        $migrationCertificate =MigrationCertificate::create($data);
        $migrationCertificate->save();
        return redirect()->route('migration.add-family', $migrationCertificate)->with('success', 'Data saved successfully');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMigrationRequest  $request
     * @param  \App\Migration  $migration
     * @return \Illuminate\Http\Response
     */
    public function update(MigrationCertificate $migrationCertificate, Request $request)
    {
       $data =$request->validate([
            'after_province' => ['required'],
            'after_municipality' => ['required'],
            'after_district' => ['required'],
            'after_vdc' => ['nullable'],
            'after_houseno' => ['nullable'],
            'after_village' => ['required'],

            'province' => ['required'],
            'municipality' => ['required'],
            'district' => ['required'],
            'vdc' => ['nullable'],
            'administrator' => ['required'],
            'reg_number' => ['required'],
            'entry_date' => ['required'],

            'before_province' => ['required'],
            'before_municipality' => ['required'],
            'before_district' => ['required'],
            'before_vdc' => ['nullable'],
            'before_village' => ['required'],
            'before_houseno' => ['nullable'],
            'migration_reason' => ['required'],
            'migration_date' => ['required'],
            'relative_name' => ['required'],
            'relationship' => ['required'],
            'relative_address' => ['required'],
            'date' => ['required'],
            'file' => ['nullable'],
        ]);


        if ($request->hasFile('file')) {
            if ($migrationCertificate->file != null) {
                Storage::delete($migrationCertificate->file);
            }
            $fileName = $request->reg_number . "-" . Str::slug($request->after_province) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName, 'local');
        }
        $migrationCertificate->update($data);
        $migrationCertificate->save();
        return redirect()->route('migration.index', $migrationCertificate)->with('success', 'Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Migration  $migration
     * @return \Illuminate\Http\Response
     */
    public function destroy(MigrationCertificate $migrationCertificate)
    {
        $migrationCertificate->delete();
        return redirect()->back()->with('success', 'Data deleted successfully');
    }

    public function print(MigrationCertificate $migrationCertificate)
    {
        // $pdf=PDF::loadView('migration-notice.print', compact('migrationCertificate','families', 'family', 'mysetting'));
        // return $pdf->stream($pdf);
        $families = $migrationCertificate->families()->get();
         return view('migration-notice.print', compact('migrationCertificate','families'));
    }
}
