<?php

namespace App\Http\Controllers;

use App\Birth;
use App\DataTables\BirthsDataTable;
use App\Exports\BirthExport;
use App\Http\Requests\StoreBirthRequest;
use App\Http\Requests\UpdateBirthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Excel;

class BirthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BirthsDataTable $dataTable)
    {
        return $dataTable->render('birth-notice.index');
        // $title = "जन्म दर्ता सूचना फाराम ";
        // $births = Birth::orderBy('id', 'desc')->get();
        // return view('birth-notice.index', compact('births', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Birth $birth)
    {
        $title = "जन्म दर्ता सूचना फाराम ";
        return view('birth-notice.form', compact('birth', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBirthRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBirthRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            $fileName = $request->reg_number . "-" . Str::slug($request->name) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName, 'local');
        }
        Birth::create($data);
        return redirect()->route('birth.index')->with('success', "New birth notice successfully registered.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function show(Birth $birth)
    {
        $title = "जन्म दर्ता सूचना फाराम ";
        return view('birth-notice.show', compact('birth', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function edit(Birth $birth)
    {
        $title = "जन्म दर्ता सूचना फाराम ";
        return view('birth-notice.form', compact('birth', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBirthRequest  $request
     * @param  \App\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBirthRequest $request, Birth $birth)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            if ($birth->file != null) {
                Storage::delete($birth->file);
            }
            $fileName = $request->reg_number . "-" . Str::slug($request->name) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName, 'local');
        }

        $birth->update($data);
        return redirect()->route('birth.index')->with('success', 'Selected birth record successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Birth  $birth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Birth $birth)
    {
        if ($birth->file != null) {
            Storage::delete($birth->file);
        }
        $birth->delete();
        return redirect()->back()->with('success', 'Selected birth record successfully removed.');
    }

    public function filter(Request $request)
    {

        $births = DB::table('births');
        if ($request->darta_number) {
            $births = $births->where('reg_number', $request->darta_number);
        }
        if ($request->name) {
            $births = $births->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->dob) {
            $births = $births->where('dob', $request->dob);
        }

        if ($request->father_name) {
            $births = $births->where('father_name', 'like', '%' . $request->father_name . '%');
        }

        if ($request->mother_name) {
            $births = $births->where('mother_name', 'like', '%' . $request->mother_name . '%');
        }

        if ($request->grandfather_name) {
            $births = $births->where('grandfather_name', 'like', '%' . $request->grandfather_name . '%');
        }

        $births = $births->orderBy('id', 'desc')->get();
        $old = $request;
        // return $births;
        return view('birth-notice.index', compact('births', 'old'));

    }


    public function listPrint(Request $request)
    {
        $births = DB::table('births');
        if ($request->darta_number) {
            $births = $births->where('reg_number', $request->darta_number);
        }
        if ($request->name) {
            $births = $births->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->dob) {
            $births = $births->where('dob', $request->dob);
        }

        if ($request->father_name) {
            $births = $births->where('father_name', 'like', '%' . $request->father_name . '%');
        }

        if ($request->mother_name) {
            $births = $births->where('mother_name', 'like', '%' . $request->mother_name . '%');
        }

        if ($request->grandfather_name) {
            $births = $births->where('grandfather_name', 'like', '%' . $request->grandfather_name . '%');
        }

        $births = $births->orderBy('id', 'desc')->get();
        $html = "<style>.kantipur{font-size: 11pt;} .kalimati{font-size: 10pt;}</style>";

        $html .= '<h1 style="text-align:center">जन्मको सूचना फाराम</h1>';
        $html .= '<table border="1" cellspacing="0" cellspadding="0" width="100%"><thead class="thead-light" >
                        <tr class="text-uppercase">
                            <th>#</th>
                            <th>दर्ता न.</th>
                            <th>नाम</th>
                            <th>लिङ्ग</th>
                            <th>जन्म मिति</th>
                            <th>बाबुको नाम</th>
                            <th>आमाको नाम</th>
                            <th>हजुरबुबाको नाम</th>
                            <th>जन्म स्थान</th>
                        </tr>
                </thead><tbody>';
        $num = '1';
        foreach ($births as $p) {
            $html .= '<tr align="center">
                            <td class="kalimati">' . $num . '</td>
                            <td class="kalimati">' . $p->reg_number . '</td>
                            <td class="kantipur">' . $p->name . '</td>
                            <td>' . $p->gender . '</td>
                            <td class="kalimati">' . $p->dob . '</td>
                            <td class="kantipur">' . $p->father_name . '</td>
                            <td class="kantipur">' . $p->mother_name . '</td>
                            <td class="kantipur">' . $p->grandfather_name . '</td>
                            <td class="kantipur">' . $p->birth_place . '</td>

                        <tr>';
            $num++;
        }
        $html .= '</tbody></table></body></html>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        // return file_get_contents('pdf.blade.php');
        $pdf->WriteHTML($html);

        $pdf->Output('irth.pdf', 'I');
    }

    public function excel(Request $request)
    {
        return Excel::download(new BirthExport($request), 'birth.xlsx');
    }

    public function getBirth($id)
    {
        $births = Birth::find($id);
        return response()->json($births);
    }

    public function printDetail(Birth $birth)
    {
        $html = "<style>.kantipur{font-size: 15pt;} .kalimati{font-size: 10pt;}.my_table th, .my_table td{border: 1px solid #ccc;padding: 7px 10px;border-collapse: collapse;}</style>";
        $html .= '<h1 style="text-align:center">जन्मको सूचना फाराम</h1>';
        $html .= '<div class="container"><div class="col-12"><table class="my_table col-12" style="border-collapse: collapse;"><tr><td>प्रदेश</td><td>' . $birth->province . '</td><td rowspan="3" style="width: 20%"></td><td>स्थानीय पञ्जिकाधिकारी</td><td class="kantipur">' . $birth->administrator . '</td></tr><tr><td>जिल्ला</td><td>' . $birth->district . '</td><td>दर्ता न.</td><td>' . $birth->reg_number . '</td></tr><tr><td>ग.पा. / न.पा</td><td>' . $birth->municipality . '</td><td>दर्ता मिति</td><td>' . $birth->entry_date . '</td></tr></table></div>';
        $html .= '<h5 style="text-align:center">नवजात शिशुको व्यक्तिगत विवरण</h5>';
        $html .= '<div class="col-xl-12">
                    <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                        <tr>
                            <td>नाम</td>
                            <td class="kantipur">' . $birth->name . '</td>
                        </tr>
                        <tr>
                            <td>जन्म मिति</td>
                            <td>' . $birth->dob . '</td>
                        </tr>
                        <tr>
                            <td>जन्म स्थान(घर,अस्पताल,प्रसुती गृह)</td>
                            <td>' . $birth->birth_place . '</td>
                        </tr>
                        <tr>
                            <td>लिङ्ग</td>
                            <td>' . $birth->gender . '</td>
                        </tr>
                        <tr>
                            <td>जन्मेको किसिम</td>
                            <td>' . $birth->birth_type . '</td>
                        </tr>
                        <tr>
                            <td>कुनै पनि शारीरिक विकृति</td>
                            <td>' . $birth->physical_disable . '</td>
                        </tr>
                        <tr>
                            <td>नवजात शिशुको हजुरबुबाको नाम</td>
                            <td class="kantipur">' . $birth->grandfather_name . '</td>
                        </tr>
                    </table>
                </div>';
        $html .= '<h5 style="text-align:center">नवजात शिशुको आमा-बाबुको विवरण</h5>';
        $html .= '<div class="col-xl-12">
                    <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                        <tr>
                            <th>विवरण</th>
                            <th>बाबुको विवरण</th>
                            <th>आमाको विवरण</th>
                        </tr>
                        <tr>
                            <td>स्थायी ठेगाना</td>
                            <td class="kantipur">'.$birth->father_parmanent_address.'</td>
                            <td class="kantipur">'.$birth->mother_parmanent_address.'</td>
                        </tr>
                        <tr>
                            <td>अस्थायी ठेगाना</td>
                            <td class="kantipur">'.$birth->father_temporary_address.'</td>
                            <td class="kantipur">'.$birth->mother_temporary_address.'</td>
                        </tr>
                        <tr>
                            <td>शिशु जन्मिदाको उमेर</td>
                            <td>'.$birth->father_age_while_baby_born.'</td>
                            <td>'.$birth->mother_age_while_baby_born.'</td>
                        </tr>
                        <tr>
                            <td>जन्म भएको देश</td>
                            <td class="kantipur">'.$birth->father_country_where_baby_born.'</td>
                            <td class="kantipur">'.$birth->mother_country_where_baby_born.'</td>
                        </tr>
                        <tr>
                            <td>नागरिकता(ना.प्र.नं.)</td>
                            <td>'.$birth->father_citizenship_number.'</td>
                            <td>'.$birth->mother_citizenship_number.'</td>
                        </tr>
                        <tr>
                            <td>शिक्षा</td>
                            <td>'.$birth->father_education.'</td>
                            <td>'.$birth->mother_education.'</td>
                        </tr>
                        <tr>
                            <td>धर्म</td>
                            <td>'.$birth->father_religion.'</td>
                            <td>'.$birth->mother_religion.'</td>
                        </tr>
                        <tr>
                            <td>मातृभाषा</td>
                            <td class="kantipur">'.$birth->father_mother_toung.'</td>
                            <td class="kantipur">'.$birth->mother_mother_toung.'</td>
                        </tr>
                        <tr>
                            <td>पेशा</td>
                            <td class="kantipur">'.$birth->father_occupation.'</td>
                            <td class="kantipur">'.$birth->mother_occupation.'</td>
                        </tr>
                        <tr>
                            <td>यो शिशु समेत गरी हाल सम्म जन्मेको सन्तान संख्या</td>
                            <td>'.$birth->father_baby_number.'</td>
                            <td>'.$birth->mother_baby_number.'</td>
                        </tr>
                        <tr>
                            <td>यो शिशु समेत गरी जीवित सन्तान संख्या</td>
                            <td>'.$birth->father_alive_baby_number.'</td>
                            <td>'.$birth->mother_alive_baby_number.'</td>
                        </tr>
                        <tr>
                            <td>शिशु जन्मदा मदत गर्ने व्यक्ति</td>
                            <td>'.$birth->father_helper.'</td>
                            <td>'.$birth->mother_helper.'</td>
                        </tr>
                        <tr>
                            <td>विवाहा भएको साल</td>
                            <td>'.$birth->father_marige_date.'</td>
                            <td>'.$birth->mother_marige_date.'</td>
                        </tr>
                    </table>

                </div>';
        $html .= '<h5 style="text-align:center">साक्षीको विवरण</h5>';
        $html .= '<div class="col-12">
                    <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                        <tr>
                            <td>क</td>
                            <td>नाम</td>
                            <td class="kantipur">'.$birth->relative_name.'</td>
                        </tr>
                        <tr>
                            <td>ख</td>
                            <td>मृतक संगको सम्बन्ध</td>
                            <td class="kantipur">'.$birth->relationship.'</td>
                        </tr>
                        <tr>
                            <td>ग</td>
                            <td>ठेगाना</td>
                            <td class="kantipur">'.$birth->relative_address.'</td>
                        </tr>
                        <tr>
                            <td>घ</td>
                            <td>मिति</td>
                            <td>'.$birth->date.'</td>
                        </tr>
                    </table>

                </div>';
        $html .= '</div>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        $pdf->SetTitle('जन्मको सूचना फाराम');
        $pdf->WriteHTML($html);

        $pdf->Output('birth.pdf', 'I');
    }
}
