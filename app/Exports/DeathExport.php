<?php

namespace App\Exports;

use App\Death;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class DeathExport implements FromCollection
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
        $deaths = DB::table('deaths');

        if ($this->request->reg_number) {
            $deaths = $deaths->where('reg_number', $this->request->reg_number);
        }

        if ($this->request->name) {
            $deaths = $deaths->where('name', 'like', '%' . $this->request->name . '%');
        }
        if ($this->request->dob) {
            $deaths = $deaths->where('dob', $this->request->dob);
        }
        if ($this->request->death_date) {
            $deaths = $deaths->where('death_date', $this->request->death_date);
        }
        if ($this->request->father_name) {
            $deaths = $deaths->where('father_name', 'like', '%' . $this->request->father_name . '%');
        }

        if ($this->request->grandfather_name) {
            $deaths = $deaths->where('grandfather_name', 'like', '%' . $this->request->grandfather_name . '%');
        }
        // return $request;
        $deaths = $deaths->orderBy('id', 'desc')->get();
        return $deaths;
    }
}
