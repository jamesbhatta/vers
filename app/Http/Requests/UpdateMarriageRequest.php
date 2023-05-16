<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarriageRequest extends FormRequest
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
            'province'=>'required',
            'district'=>'required',
            'municipality'=>'required',
            'vdc'=>'nullable',
            'administrator'=>'required',
            'reg_number'=>'required',
            'book_id'=>'required',
            'ward_num'=>'nullable',
            'entry_date'=>'required',
            'marriage_date' => 'required',
            'marriage_address' => 'required',

            'bride_name'=>'required',
            'bride_birth_country'=>'required',
            'bride_dob'=>'nullable',
            'bride_citizenship_number'=>'nullable',
            'bride_citizenship_date'=>'nullable',
            'bride_citizenship_district'=>'nullable',
            'bride_temp_address'=>'nullable',
            'bride_education'=>'nullable',
            'bride_religion'=>'nullable',
            'bride_mother_tongue'=>'nullable',
            'bride_grandfather_name'=>'nullable',
            'bride_father_name'=>'nullable',
            'bride_pre_marrige_status'=>'nullable',

            'groom_name'=>'required',
            'groom_dob'=>'nullable',
            'groom_birth_country'=>'nullable',
            'groom_citizenship_number'=>'nullable',
            'groom_citizenship_date'=>'nullable',
            'groom_citizenship_district'=>'nullable',
            'groom_education'=>'nullable',
            'groom_temp_address'=>'nullable',
            'groom_religion'=>'nullable',
            'groom_mother_tongue'=>'nullable',
            'groom_grandfather_name'=>'nullable',
            'groom_father_name'=>'nullable',
            'groom_pre_marrige_status'=>'nullable',

            'relative_name'=>'required',
            'relationship'=>'required',
            'relative_address'=>'nullable',
            'date'=>'nullable',

            'file'=>'nullable',
            'description'=>'nullable',
        ];
    }
}
