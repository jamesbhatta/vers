<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Family;
use App\MigrationCertificate;
use App\Mysetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class MigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMigration($id)
    {
        $migrations = MigrationCertificate::with('families')->find($id);
        return response()->json($migrations);
    }
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
    //     $html = "<style>.center{font-family: kantipur;font-size: 15pt;} .kalimati{font-family: kalimati;font-size: 10pt;}.my_table th, .my_table td{border: 1px solid #ccc;padding: 7px 10px;border-collapse: collapse;}</style>";
    //     // $html .= '<h3>बसाईसराईको जानकारी खोज्नुहोस्</h3>';
    //     $html .='<h6 style="text-align:center"> बसाईसराई सूचना फाराम</h6>';
    //     $html .='<h6 style="text-align:center"> (अनुसूची-६ )</h6>';
    //     $html .='<h6 style="text-align:center">(नियम-५ संग सम्बन्धित )</h6>';
    //     $html .='<div class="row d-flex">
    //     <div class="col-xl-5" style="text-align: justify;">
    //         <h5 class="col-12  mt-1" for=""> श्री स्थानीय पंजीअधिकारी ज्यु,</h5>
    //         <h5 class="col-12  mt-1" for="">
    //             <i
    //                 style="border-bottom:dashed; width:20px;">{{ $migrationCertificate->municipality }}</i>&nbsp;गा.वि.स./न.पा.
    //         </h5>
    //         <h2 class="col-12 mt-3"> स्थानीय पंजीअधिकारीको कार्यालय </h5>
    //             <h5 class="col-12  mt-3" for=""> महोदय,</h5>
    //             <h5 class="col-12  mt-1" for="" style="text-align:justify;"> निम्न लिखित विवरण खुलाई
    //                 बसाई सराईको सूचना दिन आएको
    //                 छु ।
    //                 कानून
    //                 अनुसार बसाई सराई दर्ता गरी पाउं । </h5>
    //     </div>
    //     <div class="col-lg-3 mt-3">
    //         <table class="my_table my_table1 col-lg-12">
    //             <tr>
    //                 <th class="text-center"></th>
    //                 <th class="text-center">नाम</th>
    //                 <th class="text-center">नं.</th>
    //             </tr>
    //             <tr>
    //                 <th class="text-center">प्रदेश</th>
    //                 <td class="text-center" style="font-size: 12px">
    //                     <i>{{ $migrationCertificate->province }}</i>
    //                 <td>

    //             </tr>
    //             <tr>
    //                 <th class="text-center">जिल्ला</th>
    //                 <td class="text-center" style="font-size: 12px">
    //                     <i>{{ $migrationCertificate->district }}</i></th>
    //                 <td class="text-center"></td>
    //             </tr>
    //             <tr>
    //                 <th class="text-center">ग.पा./न.पा</th>
    //                 <td class="text-center"style="font-size: 12px">
    //                     <i>{{ $migrationCertificate->municipality }}</i></th>
    //                 <td class="text-center"></td>
    //             </tr>
    //         </table>
    //     </div>
    //     <div class="col-lg-3 mt-3">
    //         <table class="registar_table">
    //             <tr>
    //                 <th></th>
    //                 <th>नाम:</th>
    //                 <th>नं.</th>
    //             </tr>
    //             <tr>
    //                 <td>स्थानीय पञ्जिकाधिकारी:</td>
    //                 <td style="font-size: 12px;"><i>{{ $migrationCertificate->administrator }}</i></td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td>दर्ता न.</td>
    //                 <td style="font-size: 12px"><i>{{ $migrationCertificate->reg_number }}</i></td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td>दर्ता मिति</td>
    //                 <td><i>{{ $migrationCertificate->entry_date }}</i></td>
    //                 <td></td>
    //             </tr>
    //         </table>
    //     </div>
    // </div>';
    //     $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
    //     $pdf->SetTitle('मृत्युको सूचना फाराम');
    //     $pdf->WriteHTML($html);

    //     $pdf->Output('deadt.pdf', 'I');

        // $families = $migrationCertificate->families()->get();
        // return $families;
        //  return view('migration-notice.print', compact('migrationCertificate','families'));
        // $pdf = PDF::loadView('migration-notice.print', ['migrationCertificate' => $migrationCertificate,'families' => $families]);
        $pdf = Pdf::loadView('test-print');
        return $pdf->stream();
        return $pdf->download('migration.pdf');
    }
}
