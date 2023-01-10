<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeathRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'administrator'=>'required',
            'reg_number'=>'required',
            'entry_date'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'vdc'=>'nullable',
            'dob'=>'required',
            'death_date'=>'required',
            'death_place'=>'required',
            'citizenship_number'=>'nullable',
            'citizenship_date'=>'nullable',
            'citizenship_district'=>'nullable',
            'marital_status'=>'required',
            'birth_country'=>'required',
            'mother_tongue'=>'required',
            'grandfather_name'=>'required',
            'spouse'=>'nullable',
            'education'=>'required',
            'religion'=>'required',
            'father_name'=>'required',
            'cause_death'=>'required',
            'province'=>'required',
            'district'=>'required',
            'municipality'=>'required',
            'address'=>'nullable',
            'relative_name'=>'required',
            'relationship'=>'required',
            'relative_address'=>'required',
            'date'=>'required',
            'file'=>'nullable',
            'description'=>'nullable',
        ];
    }
}
