<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeathRequest extends FormRequest
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
            'vdc'=>'nullable',
            'name'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'dob'=>'nullable',
            'death_date'=>'required',
            'death_place'=>'required',
            'citizenship_number'=>'nullable',
            'citizenship_date'=>'nullable',
            'citizenship_district'=>'nullable',
            'marital_status'=>'required',
            'mother_tongue'=>'required',
            'grandfather_name'=>'required',
            'spouse'=>'nullable',
            'education'=>'required',
            'religion'=>'required',
            'father_name'=>'required',
            'cause_death'=>'required',
            'birth_country'=>'nullable',
            'province'=>'required',
            'district'=>'required',
            'municipality'=>'required',
            'address'=>'nullable',
            'relative_name'=>'nullable',
            'relationship'=>'nullable',
            'relative_address'=>'nullable',
            'date'=>'nullable',
            'file'=>'nullable',
            'description'=>'nullable',
        ];
    }
}
