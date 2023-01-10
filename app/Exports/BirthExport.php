<?php

namespace App\Exports;

use App\Birth;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class BirthExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function collection()
    {
        $births = DB::table('births');
        if ($this->request->darta_number) {
            $births = $births->where('reg_number', $this->request->darta_number);
        }
        if ($this->request->name) {
            $births = $births->where('name', 'like', '%' . $this->request->name . '%');
        }

        if ($this->request->dob) {
            $births = $births->where('dob', $this->request->dob);
        }

        if ($this->request->father_name) {
            $births = $births->where('father_name', 'like', '%' . $this->request->father_name . '%');
        }

        if ($this->request->mother_name) {
            $births = $births->where('mother_name', 'like', '%' . $this->request->mother_name . '%');
        }

        if ($this->request->grandfather_name) {
            $births = $births->where('grandfather_name', 'like', '%' . $this->request->grandfather_name . '%');
        }

        $births = $births->orderBy('id','desc')->get();
        return $births;
    }
}
