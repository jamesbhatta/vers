<?php

namespace App\Http\Controllers;

use App\Exports\MarriageExport;
use App\Http\Requests\StoreMarriageRequest;
use App\Http\Requests\UpdateMarriageRequest;
use App\Marriage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Str;
use Excel;

class MarriageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "विवाह दर्ता सूचना फाराम ";
        $marriages = Marriage::orderBy('id','desc')->get();
        return view('marriage-notice.index',compact('marriages','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Marriage $marriage)
    {
        $title = "विवाह दर्ता सूचना फाराम ";
        return view('marriage-notice.form', compact('marriage','title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarriageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarriageRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            $fileName = $request->reg_number . "-" . Str::slug($request->name) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName, 'local');
        }
        Marriage::create($data);
        return redirect()->route('marriage.index')->with('success', "New marriage notice successfully registered.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function show(Marriage $marriage)
    {
        $title = "विवाह दर्ता सूचना फाराम ";
        return view('marriage-notice.show', compact('marriage','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function edit(Marriage $marriage)
    {
        $title = "विवाह दर्ता सूचना फाराम ";
        return view('marriage-notice.form', compact('marriage','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarriageRequest  $request
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarriageRequest $request, Marriage $marriage)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            if ($marriage->file != null) {
                Storage::delete($marriage->file);
            }
            $fileName = $request->reg_number . "-" . Str::slug($request->name) . "." . $request->file->getClientOriginalExtension();
            $data['file'] = $request->file('file')->storeAs('image', $fileName, 'local');
        }

        $marriage->update($data);
        return redirect()->route('marriage.index')->with('success', 'Selected marriage record successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marriage $marriage)
    {
        if ($marriage->file != null) {
            Storage::delete($marriage->file);
        }
        $marriage->delete();
        return redirect()->back()->with('success', 'Selected marriage record successfully removed.');
    }

    public function filter(Request $request)
    {
        $data = Marriage::get();
        $marriages = DB::table('marriages');
        if($request->darta_number){
            $marriages = $marriages->where('reg_number', $request->darta_number);
        }

        if($request->entry_date){
            $marriages = $marriages->where('entry_date', $request->entry_date);
        }

        if ($request->bride_name) {
            $marriages = $marriages->where('bride_name', 'like', '%' . $request->bride_name . '%');
        }

        if ($request->groom_name) {
            $marriages = $marriages->where('groom_name', 'like', '%' . $request->groom_name . '%');
        }

        if ($request->bride_father_name) {
            $marriages = $marriages->where('bride_father_name', 'like', '%' . $request->bride_father_name . '%');
        }

        if ($request->groom_father_name) {
            $marriages = $marriages->where('groom_father_name', 'like', '%' . $request->groom_father_name . '%');
        }
        $marriages = $marriages->orderBy('id','desc')->get();
        $old = $request;
        return view('marriage-notice.index',compact('marriages','old'));
    }

    public function listPrint(Request $request)
    {
        $marriage = DB::table('marriages');
        if($request->darta_number){
            $marriage = $marriage->where('reg_number', $request->darta_number);
        }

        if($request->entry_date){
            $marriage = $marriage->where('entry_date', $request->entry_date);
        }

        if ($request->bride_name) {
            $marriage = $marriage->where('bride_name', 'like', '%' . $request->bride_name . '%');
        }

        if ($request->groom_name) {
            $marriage = $marriage->where('groom_name', 'like', '%' . $request->groom_name . '%');
        }

        if ($request->bride_father_name) {
            $marriage = $marriage->where('bride_father_name', 'like', '%' . $request->bride_father_name . '%');
        }

        if ($request->groom_father_name) {
            $marriage = $marriage->where('groom_father_name', 'like', '%' . $request->groom_father_name . '%');
        }
        $marriage = $marriage->orderBy('id','desc')->get();
        $html = "<style>.kantipur{font-family: kantipur;font-size: 15pt;} .kalimati{font-family: kalimati;font-size: 10pt;}</style>";

        $html .= '<h1 style="text-align:center">विवाहको सूचना फाराम</h1>';
        $html .= '<table border="1" cellspacing="0" cellspadding="0" width="100%"><thead class="thead-light" >
                        <tr class="text-uppercase">
                            <th>#</th>
                            <th>दर्ता न.</th>
                            <th>दुलाहाको नाम</th>
                            <th>दुलाहाको बाजेको नाम</th>
                            <th>दुलाहाको बाबुको नाम</th>

                            <th>दुलहीको नाम</th>
                            <th>दुलहीको बाजेको नाम</th>
                            <th>दुलहीको बाबुको नाम</th>
                        </tr>
                </thead><tbody>';
                    $num = '1';
                    foreach ($marriage as $p) {
                        $html.='<tr align="center">
                            <td class="kalimati">'.$num.'</td>
                            <td class="kalimati">'.$p->reg_number.'</td>
                            <td class="kantipur">'.$p->bride_name.'</td>
                            <td class="kantipur">'.$p->bride_grandfather_name.'</td>
                            <td class="kantipur">'.$p->bride_father_name.'</td>
                            <td class="kantipur">'.$p->groom_name.'</td>
                            <td class="kantipur">'.$p->groom_grandfather_name.'</td>
                            <td class="kantipur">'.$p->groom_father_name.'</td>

                        <tr>';
                        $num++;
                    }
                $html .= '</tbody></table></body></html>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        // return file_get_contents('pdf.blade.php');
        $pdf->WriteHTML($html);

        $pdf->Output('marriage.pdf','I');
    }

    public function excel(Request $request)
    {
        return Excel::download(new MarriageExport($request), 'marriage.xlsx');
    }

    public function getMarriage($id)
    {
        $marriages = Marriage::find($id);
        return response()->json($marriages);
    }

    public function printDetail(Marriage $marriage)
    {
        $html = "<style>.kantipur{font-family: kantipur;font-size: 15pt;} .kalimati{font-family: kalimati;font-size: 10pt;}.my_table th, .my_table td{border: 1px solid #ccc;padding: 7px 10px;border-collapse: collapse;}</style>";
        $html .= '<h1 style="text-align:center">विवाहको सूचना फाराम</h1>';
        $html .= '<div class="container"><div class="col-12"><table class="my_table col-12" style="border-collapse: collapse;"><tr><td>प्रदेश</td><td>' . $marriage->province . '</td><td rowspan="3" style="width: 20%"></td><td>स्थानीय पञ्जिकाधिकारी</td><td class="kantipur">' . $marriage->administrator . '</td></tr><tr><td>जिल्ला</td><td>' . $marriage->district . '</td><td>दर्ता न.</td><td>' . $marriage->reg_number . '</td></tr><tr><td>ग.पा. / न.पा</td><td>' . $marriage->municipality . '</td><td>दर्ता मिति</td><td>' . $marriage->entry_date . '</td></tr></table></div>';
        $html .= '<h5 style="text-align:center">दुलाहा-दुलहीको विवरण</h5>';
        $html .= ' <div class="col-xl-12">
                        <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                            <tr>
                                <th>विवरण</th>
                                <th>दुलाहाको विवरण</th>
                                <th>दुलहीको विवरण</th>
                            </tr>
                            <tr>
                                <td>नाम,थर</td>
                                <td class="kantipur">'.$marriage->bride_name.'</td>
                                <td class="kantipur">'.$marriage->groom_name.'</td>
                            </tr>
                            <tr>
                                <td>जन्म मिति</td>
                                <td>'.$marriage->bride_dob.'</td>
                                <td>'.$marriage->groom_dob.'</td>
                            </tr>
                            <tr>
                                <td>जन्म भएको देश</td>
                                <td class="kantipur">'.$marriage->bride_birth_country.'</td>
                                <td class="kantipur">'.$marriage->groom_birth_country.'</td>
                            </tr>
                            <tr>
                                <td>नागरिकता (ना.प्र.नं)</td>
                                <td>'.$marriage->bride_citizenship_number.'</td>
                                <td>'.$marriage->groom_citizenship_number.'</td>
                            </tr>
                            <tr>
                                <td>नागरिकता जारी मिति</td>
                                <td>'.$marriage->bride_citizenship_date.'</td>
                                <td>'.$marriage->groom_citizenship_date.'</td>
                            </tr>
                            <tr>
                                <td>नागरिकता लिएको जिल्ला</td>
                                <td class="kantipur">'.$marriage->bride_citizenship_district.'</td>
                                <td class="kantipur">'.$marriage->groom_citizenship_district.'</td>
                            </tr>
                            <tr>
                                <td>स्थाई ठेगाना</td>
                                <td class="kantipur">'.$marriage->bride_temp_address.'</td>
                                <td class="kantipur">'.$marriage->groom_temp_address.'</td>
                            </tr>
                            <tr>
                                <td>शिक्षा</td>
                                <td>'.$marriage->bride_education.'</td>
                                <td>'.$marriage->groom_education.'</td>
                            </tr>
                            <tr>
                                <td>धर्म</td>
                                <td>'.$marriage->bride_religion.'</td>
                                <td>'.$marriage->groom_religion.'</td>
                            </tr>
                            <tr>
                                <td>मातृभाषा</td>
                                <td class="kantipur">'.$marriage->bride_mother_tongue.'</td>
                                <td class="kantipur">'.$marriage->groom_mother_tongue.'</td>
                            </tr>
                            <tr>
                                <td>बाजेको नाम</td>
                                <td class="kantipur">'.$marriage->bride_grandfather_name.'</td>
                                <td class="kantipur">'.$marriage->groom_grandfather_name.'</td>
                            </tr>
                            <tr>
                                <td>बाबुको नाम</td>
                                <td class="kantipur">'.$marriage->bride_father_name.'</td>
                                <td class="kantipur">'.$marriage->groom_father_name.'</td>
                            </tr>
                            <tr>
                                <td>पूर्व वैवाहिक स्थिति</td>
                                <td>'.$marriage->bride_pre_marrige_status.'</td>
                                <td>'.$marriage->groom_pre_marrige_status.'</td>
                            </tr>

                        </table>
                    </div>';

        $html .= '<h5 style="text-align:center">साक्षीको विवरण</h5>';
        $html .= '<div class="col-12">
                    <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                        <tr>
                            <td>क</td>
                            <td>नाम</td>
                            <td class="kantipur">'.$marriage->relative_name.'</td>
                        </tr>
                        <tr>
                            <td>ख</td>
                            <td>मृतक संगको सम्बन्ध</td>
                            <td class="kantipur">'.$marriage->relationship.'</td>
                        </tr>
                        <tr>
                            <td>ग</td>
                            <td>ठेगाना</td>
                            <td class="kantipur">'.$marriage->relative_address.'</td>
                        </tr>
                        <tr>
                            <td>घ</td>
                            <td>मिति</td>
                            <td>'.$marriage->date.'</td>
                        </tr>
                    </table>

                </div>';
        $html .= '</div>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        $pdf->SetTitle('विवाहको सूचना फाराम');
        $pdf->WriteHTML($html);

        $pdf->Output('marriage.pdf', 'I');
    }
}
