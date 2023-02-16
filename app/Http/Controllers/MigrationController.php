<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Family;
use App\Http\Requests\MigrationCertificateRequest;
use App\MigrationCertificate;
use App\Mysetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



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
        $mysetting = Mysetting::get();
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

        if ($request->from) {
            if($request->to){
                $migrationCertificates = $migrationCertificates->whereBetween('entry_date', [date($request->from),date($request->to)]);
                // Reservation::->get();
            }else{
                $migrationCertificates = $migrationCertificates->where('entry_date', $request->from);
            }
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
        return view('migration-notice.show', compact('migrationCertificate', 'families', 'family'));
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


    public function store(MigrationCertificate $migrationCertificate, MigrationCertificateRequest $request)
    {
        //  return $request;
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $fileName = $request->reg_number . "-" . Str::slug($request->province) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName);
        }
        // return $data;
        $migrationCertificate = MigrationCertificate::create($data);
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
    public function update(MigrationCertificate $migrationCertificate, MigrationCertificateRequest $request)
    {
        $data = $request->validated();
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
        $html = "<style>.kantipur{font-size: 15pt;} .kalimati{font-size: 10pt;}.my_table th, .my_table td{border: 1px solid #ccc;padding: 7px 10px;border-collapse: collapse;} .dash{border-bottom: dashed 1px rgb(132, 132, 132);}</style>";
        $html .= '<h1 style="text-align:center">बसाईसराई सूचना फाराम</h1>';
        $html .= '<p style="text-align:center">(अनुसूची-६ )</p>';
        $html .= '<p style="text-align:center">(नियम-५ संग सम्बन्धित )</p>';
        $html .= '<div class="container"><div class="col-12"><table class="my_table col-12" style="border-collapse: collapse;"><tr><td>प्रदेश</td><td>' . $migrationCertificate->province . '</td><td rowspan="3" style="width: 20%"></td><td>स्थानीय पञ्जिकाधिकारी</td><td class="kantipur">' . $migrationCertificate->administrator . '</td></tr><tr><td>जिल्ला</td><td>' . $migrationCertificate->district . '</td><td>दर्ता न.</td><td>' . $migrationCertificate->reg_number . '</td></tr><tr><td>ग.पा. / न.पा</td><td>' . $migrationCertificate->vdc . '</td><td>दर्ता मिति</td><td>' . $migrationCertificate->entry_date . '</td></tr></table></div>';
        $html .= '<h5 style="text-align:center">(१) बसाई सर्ने परिवारका सदस्यहरुको नाम/बसाई सराई व्यक्तिको</h5>';
        $html .= ' <div class="col-xl-12">
                        <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="text-align:center" rowspan="2">क्र. स. </th>
                                    <th style="text-align:center" rowspan="2">नाम ,थर</th>
                                    <th style="text-align:center" rowspan="2"> उमेर</th>
                                    <th style="text-align:center" rowspan="2">लिङ्ग</th>
                                    <th style="text-align:center" rowspan="2">जन्म स्थान
                                    </th>
                                    <th style="text-align:center" rowspan="2">नागरिकता न.
                                    </th>
                                    <th style="text-align:center" colspan="2"
                                        align="center">
                                        ठेगाना</th>
                                    <th style="text-align:center" rowspan="2">शैक्षिक
                                        योग्यता</th>
                                    <th style="text-align:center" rowspan="2">धर्म</th>
                                    <th style="text-align:center" rowspan="2">मातृभाषा</th>
                                    <th style="text-align:center" rowspan="2">कैफियत</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center">स्थायी</th>
                                    <th style="text-align:center">अस्थायी</th>
                                </tr>
                            </thead><tbody>';
        $num = '1';
        foreach ($migrationCertificate->families as $p) {
            $html .= '<tr>
                <td>' . $num . '</td>
                <td>' . $p->name . '</td>
                <td>' . $p->age . '</td>
                <td>' . $p->gender . '</td>
                <td>' . $p->birthplace . '</td>
                <td>' . $p->citizenship . '</td>
                <td>' . $p->permanent_addres . '</td>
                <td>' . $p->temporary_address . '</td>
                <td>' . $p->education . '</td>
                <td>' . $p->religion . '</td>
                <td>' . $p->mothertongue . '</td>
                <td>' . $p->description . '</td>
            </tr>';
            $num++;
        }
        $html .= '</tbody></table>
                    </div>';


        $html .= '<div style="margin-top:30px">
        <div style="text-align: justify" class="">
            <div class="row" style="text-align: justify;">
                (२) कहाँ सरी जाने &nbsp;<span class="dash">' . $migrationCertificate->after_district . '</span>
                &nbsp;जिल्ला&nbsp;&nbsp;<span class="dash">' . $migrationCertificate->after_municipality . '</span>
                &nbsp;न.पा./गा.वि.स. वडा नं. &nbsp;<span class="dash">' . $migrationCertificate->after_ward . '</span>
                &nbsp;टोलको नाम
                &nbsp;
                <span class="dash">' . $migrationCertificate->after_village . '</span>
                &nbsp;घर
                नं &nbsp;<span class="dash">' . $migrationCertificate->after_houseno . '</span>
            </div>
            <br>
            <div class="row" style="text-align: justify">
                (३) कहाँ बाट सरी आएको&nbsp;
                <span class="dash">' . $migrationCertificate->before_district . '</span>
                &nbsp;जिल्ला &nbsp;<span class="dash">' . $migrationCertificate->before_municipality . '</span>

                &nbsp;  न.पा./गा.वि.स. वडा
                नं. &nbsp;<span class="dash">' . $migrationCertificate->before_ward . '</span>
                &nbsp;टोलको नाम &nbsp;<span class="dash">' . $migrationCertificate->before_village . '</span>
                &nbsp;घर
                नं &nbsp;<span class="dash">' . $migrationCertificate->before_houseno . '</span>
                &nbsp;बसाई सराईको मिति &nbsp;<span class="dash">' . $migrationCertificate->migration_date . '</span>

            </div> <br>

            <div class="row">
                <p style="text-align: justify">
                    (४) बसाई सराईको कारण &nbsp;<span class="dash">' . $migrationCertificate->migration_reason . '</span>


                </p>
            </div>

        </div>
    </div>';
        $html .= '<h5 style="text-align:center">साक्षीको विवरण</h5>';
        $html .= '<div class="col-12">
                    <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                        <tr>
                            <td>क</td>
                            <td>नाम</td>
                            <td class="kantipur">' . $migrationCertificate->relative_name . '</td>
                        </tr>
                        <tr>
                            <td>ख</td>
                            <td>मृतक संगको सम्बन्ध</td>
                            <td class="kantipur">' . $migrationCertificate->relationship . '</td>
                        </tr>
                        <tr>
                            <td>ग</td>
                            <td>ठेगाना</td>
                            <td class="kantipur">' . $migrationCertificate->relative_address . '</td>
                        </tr>
                        <tr>
                            <td>घ</td>
                            <td>मिति</td>
                            <td>' . $migrationCertificate->date . '</td>
                        </tr>
                    </table>

                </div>';
        $html .= '</div>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        $pdf->SetTitle('विवाहको सूचना फाराम');
        $pdf->WriteHTML($html);

        $pdf->Output('migration-notice.pdf', 'I');
    }
}
