<?php

namespace App\Exports;

use App\Marriage;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class MarriageExport implements FromCollection
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

        $marriage = DB::table('marriages');
        if($this->request->darta_number){
            $marriage = $marriage->where('reg_number', $this->request->darta_number);
        }

        if($this->request->entry_date){
            $marriage = $marriage->where('entry_date', $this->request->entry_date);
        }

        if ($this->request->bride_name) {
            $marriage = $marriage->where('bride_name', 'like', '%' . $this->request->bride_name . '%');
        }

        if ($this->request->groom_name) {
            $marriage = $marriage->where('groom_name', 'like', '%' . $this->request->groom_name . '%');
        }

        if ($this->request->bride_father_name) {
            $marriage = $marriage->where('bride_father_name', 'like', '%' . $this->request->bride_father_name . '%');
        }

        if ($this->request->groom_father_name) {
            $marriage = $marriage->where('groom_father_name', 'like', '%' . $this->request->groom_father_name . '%');
        }
        $marriage = $marriage->orderBy('id','desc')->get();

        return $marriage;
    }
}
