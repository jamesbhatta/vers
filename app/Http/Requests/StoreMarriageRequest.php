<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarriageRequest extends FormRequest
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

            'bride_name'=>'required',
            'bride_birth_country'=>'required',
            'bride_dob'=>'required',
            'bride_citizenship_number'=>'nullable',
            'bride_citizenship_date'=>'nullable',
            'bride_citizenship_district'=>'nullable',
            'bride_temp_address'=>'required',
            'bride_education'=>'required',
            'bride_religion'=>'required',
            'bride_mother_tongue'=>'required',
            'bride_grandfather_name'=>'required',
            'bride_father_name'=>'required',
            'bride_pre_marrige_status'=>'required',

            'groom_name'=>'required',
            'groom_dob'=>'required',
            'groom_birth_country'=>'required',
            'groom_citizenship_number'=>'nullable',
            'groom_citizenship_date'=>'nullable',
            'groom_citizenship_district'=>'nullable',
            'groom_education'=>'required',
            'groom_temp_address'=>'required',
            'groom_religion'=>'required',
            'groom_mother_tongue'=>'required',
            'groom_grandfather_name'=>'required',
            'groom_father_name'=>'required',
            'groom_pre_marrige_status'=>'required',

            'relative_name'=>'required',
            'relationship'=>'required',
            'relative_address'=>'required',
            'date'=>'required',

            'file'=>'nullable',
            'description'=>'nullable',
        ];
    }
}
