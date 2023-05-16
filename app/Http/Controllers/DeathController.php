<?php

namespace App\Http\Controllers;

use App\Death;
use App\Exports\DeathExport;
use App\Http\Requests\StoreDeathRequest;
use App\Http\Requests\UpdateDeathRequest;
use App\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Auth;

class DeathController extends Controller
{
    function __contstruct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDeath($id)
    {
        $death = Death::find($id);
        return response()->json($death);
    }
    public function index()
    {
        $deaths = Death::orderBy('id', 'desc')->get();
        $title = 'मृत्यु दर्ता सूचना फाराम ';
        return view('death-notice.index', compact('deaths', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Death $death)
    {
        $title = 'मृत्यु दर्ता सूचना फाराम ';
        return view('death-notice.form', compact('death', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeathRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $date_of_birth = date('d-m-Y', strtotime($request->dob));
        $date_of_death = date('d-m-Y', strtotime($request->death_date));
        $data = $request->validate([
            'administrator' => 'required',
            'reg_number' => 'required',
            'ward_num' => 'nullable',
            'book_id' => 'required',
            'entry_date' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'vdc' => 'nullable',
            'age' => 'required',
            'dob' => 'nullable',
            'death_date' => 'required',
            'death_place' => 'required',
            'citizenship_number' => 'nullable',
            'citizenship_date' => 'nullable',
            'citizenship_district' => 'nullable',
            'marital_status' => 'nullable',
            'birth_country' => 'nullable',
            'mother_tongue' => 'nullable',
            'grandfather_name' => 'nullable',
            'spouse' => 'nullable',
            'education' => 'nullable',
            'religion' => 'nullable',
            'father_name' => 'nullable',
            'cause_death' => 'nullable',
            'province' => 'required',
            'district' => 'required',
            'municipality' => 'required',
            'address' => 'nullable',
            'relative_name' => 'required',
            'relationship' => 'required',
            'relative_address' => 'nullable',
            'date' => 'nullable',
            'file' => 'nullable',
            'description' => 'nullable',
        ]);
        // $date=date_create();

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('image');
        }
        $user->death()->create($data);
        return redirect()
            ->route('death.index')
            ->with('success', 'New death notice form successfully registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function show(Death $death)
    {
        return view('death-notice.show', compact('death'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function edit(Death $death)
    {
        $title = 'मृत्यु दर्ता सूचना फाराम ';
        return view('death-notice.form', compact('death', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeathRequest  $request
     * @param  \App\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeathRequest $request, Death $death)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) {
            if ($death->file != null) {
                Storage::delete($death->file);
            }
            $data['file'] = $request->file('file')->store('image');
        }

        $death->update($data);
        return redirect()
            ->route('death.index')
            ->with('success', 'Selected death record form succesfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Death  $death
     * @return \Illuminate\Http\Response
     */
    public function destroy(Death $death)
    {
        if ($death->file != null) {
            Storage::delete($death->file);
        }
        $death->delete();
        return redirect()
            ->back()
            ->with('success', 'Selected death record successfully removed.');
    }

    public function filter(Request $request)
    {
        $deaths = DB::table('deaths');

        if ($request->reg_number) {
            $deaths = $deaths->where('reg_number', $request->reg_number);
        }

        if ($request->name) {
            $deaths = $deaths->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->dob) {
            $deaths = $deaths->where('dob', $request->dob);
        }
        if ($request->user_id) {
            $deaths = $deaths->where('user_id', $request->user_id);
        }
        if ($request->book_id) {
            $deaths = $deaths->where('book_id', $request->book_id);
        }
        if ($request->death_date) {
            $deaths = $deaths->where('death_date', $request->death_date);
        }
        if ($request->father_name) {
            $deaths = $deaths->where('father_name', 'like', '%' . $request->father_name . '%');
        }

        if ($request->grandfather_name) {
            $deaths = $deaths->where('grandfather_name', 'like', '%' . $request->grandfather_name . '%');
        }
        if ($request->from) {
            if ($request->to) {
                $deaths = $deaths->whereBetween('entry_date', [date($request->from), date($request->to)]);
                // Reservation::->get();
            } else {
                $deaths = $deaths->where('entry_date', $request->from);
            }
        }
        $old = $request;
        // return $request;
        $deaths = $deaths->orderBy('id', 'desc')->get();
        return view('death-notice.index', compact('deaths', 'old'));
    }

    public function listPrint(Request $request)
    {
        $deaths = DB::table('deaths');

        if ($request->reg_number) {
            $deaths = $deaths->where('reg_number', $request->reg_number);
        }

        if ($request->name) {
            $deaths = $deaths->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->dob) {
            $deaths = $deaths->where('dob', $request->dob);
        }
        if ($request->user_id) {
            $deaths = $deaths->where('user_id', $request->user_id);
        }
        if ($request->book_id) {
            $deaths = $deaths->where('book_id', $request->book_id);
        }
        if ($request->death_date) {
            $deaths = $deaths->where('death_date', $request->death_date);
        }
        if ($request->father_name) {
            $deaths = $deaths->where('father_name', 'like', '%' . $request->father_name . '%');
        }

        if ($request->grandfather_name) {
            $deaths = $deaths->where('grandfather_name', 'like', '%' . $request->grandfather_name . '%');
        }
        if ($request->from) {
            if ($request->to) {
                $deaths = $deaths->whereBetween('entry_date', [date($request->from), date($request->to)]);
                // Reservation::->get();
            } else {
                $deaths = $deaths->where('entry_date', $request->from);
            }
        }
        // return $request;
        $deaths = $deaths->orderBy('id', 'desc')->get();
        $html = '<style>.kantipur{font-size: 11pt;} .kalimati{font-size: 10pt;}</style>';

        $html .= '<h1 style="text-align:center">मृत्युको सूचना फाराम</h1>';
        $html .= '<table border="1" cellspacing="0" cellspadding="0" width="100%"><thead class="thead-light" >
                        <tr class="text-uppercase">
                            <th>#</th>
                            <th>दर्ता मिति</th>
                            <th>नाम,थर</th>
                            <th>लिङ्ग</th>
                            <th>जन्म मिति</th>
                            <th>मरेको मिति</th>
                            <th>मरेको ठाउँ</th>
                            <th>मृत्युको कारण</th>
                            <th>वैवाहिक स्थिति</th>
                            <th>बुबाको नाम</th>
                        </tr>
                </thead><tbody>';
        $num = '1';
        foreach ($deaths as $p) {
            $html .=
                '<tr align="center">
                            <td class="kalimati">' .
                $num .
                '</td>
                            <td class="kalimati">' .
                $p->reg_number .
                '</td>
                            <td class="kantipur">' .
                $p->name .
                '</td>
                            <td>' .
                $p->gender .
                '</td>
                            <td class="kalimati">' .
                $p->dob .
                '</td>
                            <td class="kalimati">' .
                $p->death_date .
                '</td>
                            <td class="kantipur">' .
                $p->death_place .
                '</td>
                            <td>' .
                $p->cause_death .
                '</td>
                            <td>' .
                $p->marital_status .
                '</td>
                            <td class="kantipur">' .
                $p->father_name .
                '</td>
                        <tr>';
            $num++;
        }
        $html .= '</tbody></table></body></html>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        // return file_get_contents('pdf.blade.php');
        $pdf->WriteHTML($html);

        $pdf->Output('deadt.pdf', 'I');
    }

    public function excel(Request $request)
    {
        return Excel::download(new DeathExport($request), 'death.xlsx');
    }

    public function printDetail(Death $death)
    {
        $html = '<style>.kantipur{font-size: 11pt;} .kalimati{font-size: 10pt;}.my_table th, .my_table td{border: 1px solid #ccc;padding: 7px 10px;border-collapse: collapse;}</style>';
        $html .= '<h1 style="text-align:center">मृत्युको सूचना फाराम</h1>';
        $html .= '<div class="container"><div class="col-12"><table class="my_table col-12" style="border-collapse: collapse;width:100%"><tr><td>प्रदेश</td><td>' . $death->province . '</td><td>स्थानीय पञ्जिकाधिकारी</td><td class="kantipur">' . $death->administrator . '</td></tr><tr><td>जिल्ला</td><td>' . $death->district . '</td><td>दर्ता न.</td><td>' . $death->reg_number . '</td></tr><tr><td>ग.पा. / न.पा</td><td>' . $death->municipality . '</td><td>दर्ता मिति</td><td>' . $death->entry_date . '</td></tr></table></div>';
        $html .= '<h3 style="text-align:center">मृतकको विवरण</h3>';
        $html .=
            '<div class="col-12">
                    <table class="my_table col-12" style="border-collapse: collapse;width:100%">
                        <tr>
                            <td class="text-center">क</td>
                            <td>नाम</td>
                            <td class="kantipur">' .
            $death->name .
            '</td>
                            <td class="text-center">ख</td>
                            <td>लिङ्ग</td>
                            <td>' .
            $death->gender .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">ग</td>
                            <td>उमेर</td>
                            <td>' .
            $death->age .
            '</td>
                            <td class="text-center">घ</td>
                            <td>मरेको मिति</td>
                            <td>' .
            $death->death_date .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">ङ</td>
                            <td>मरेको ठाउँ</td>
                            <td class="kantipur">' .
            $death->death_place .
            '</td>
                            <td class="text-center">च</td>
                            <td class="kantipur">जन्म भएको देश</td>
                            <td class="kantipur">' .
            $death->birth_country .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">छ</td>
                            <td>नागरिकता (ना. प्र. न.)</td>
                            <td>' .
            $death->citizenship_number .
            '</td>
                            <td class="text-center">ज</td>
                            <td>मृतकको स्थाई ठेगाना</td>
                            <td class="kantipur">' .
            $death->address .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">झ</td>
                            <td>वैवाहिक स्थिति</td>
                            <td>' .
            $death->marital_status .
            '</td>
                            <td class="text-center">ञ</td>
                            <td>शिक्षा</td>
                            <td>' .
            $death->education .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">ट</td>
                            <td>मातृभाषा</td>
                            <td class="kantipur">' .
            $death->mother_tongue .
            '</td>
                            <td class="text-center">ठ</td>
                            <td>धर्म</td>
                            <td>' .
            $death->religion .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">ड</td>
                            <td>हजुरबुबाको नाम</td>
                            <td class="kantipur">' .
            $death->grandfather_name .
            '</td>
                            <td class="text-center">ढ</td>
                            <td>बुबाको नाम</td>
                            <td class="kantipur">' .
            $death->father_name .
            '</td>
                        </tr>
                        <tr>
                            <td class="text-center">ण</td>
                            <td>पति/पत्नीको नाम</td>
                            <td class="kantipur">' .
            $death->spouse .
            '</td>
                            <td class="text-center">त</td>
                            <td>मृत्युको कारण</td>
                            <td>' .
            $death->cause_death .
            '</td>
                        </tr></table></div>';
        $html .= '<h3 style="text-align:center">साक्षीको विवरण</h3>';
        $html .=
            '<div class="col-12">
                    <table class="my_table col-12" style="width:100%;border-collapse: collapse;">
                        <tr>
                            <td>क</td>
                            <td>नाम</td>
                            <td class="kantipur">' .
            $death->relative_name .
            '</td>
                        </tr>
                        <tr>
                            <td>ख</td>
                            <td>मृतक संगको सम्बन्ध</td>
                            <td class="kantipur">' .
            $death->relationship .
            '</td>
                        </tr>
                        <tr>
                            <td>ग</td>
                            <td>ठेगाना</td>
                            <td class="kantipur">' .
            $death->relative_address .
            '</td>
                        </tr>
                        <tr>
                            <td>घ</td>
                            <td>मिति</td>
                            <td>' .
            $death->date .
            '</td>
                        </tr>
                    </table>

                </div>';
        $html .= '</div>';
        $pdf = new \Mpdf\Mpdf(['mode' => 'UTF-8', 'format' => 'A4-p', 'autoScriptToLang' => true, 'autoLangToFont' => true]);
        $pdf->SetTitle('मृत्युको सूचना फाराम');
        $pdf->WriteHTML($html);

        $pdf->Output('deadt.pdf', 'I');
    }
}
