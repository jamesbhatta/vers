<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBirthRequest extends FormRequest
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
            'province' => 'required',
            'district' => 'required',
            'municipality' => 'required',
            'book_id' => 'required',
            'ward_num' => 'nullable',
            'administrator' => 'required',
            'reg_number' => 'required',
            'vdc' => 'nullable',
            'entry_date' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            // 'mother_tongue'=>"required",
            'grandfather_name' => 'required',
            'birth_place' => 'required',
            'birth_type' => 'required',
            'physical_disable' => 'required',

            'father_name' => 'required',
            'father_parmanent_address' => 'required',
            'father_temporary_address' => 'nullable',
            'father_age_while_baby_born' => 'nullable',
            'father_country_where_baby_born' => 'nullable',
            'father_citizenship_number' => 'nullable',
            'father_religion' => 'nullable',
            'father_mother_toung' => 'nullable',
            'father_education' => 'nullable',
            'father_occupation' => 'nullable',
            'father_baby_number' => 'nullable',
            'father_alive_baby_number' => 'nullable',
            'father_helper' => 'nullable',
            'father_marige_date' => 'nullable',

            'mother_name' => 'required',
            'mother_parmanent_address' => 'required',
            'mother_temporary_address' => 'nullable',
            'mother_age_while_baby_born' => 'nullable',
            'mother_education' => 'nullable',
            'mother_country_where_baby_born' => 'nullable',
            'mother_citizenship_number' => 'nullable',
            'mother_religion' => 'nullable',
            'mother_mother_toung' => 'nullable',
            'mother_occupation' => 'nullable',
            'mother_baby_number' => 'nullable',
            'mother_alive_baby_number' => 'nullable',
            'mother_helper' => 'nullable',
            'mother_marige_date' => 'nullable',

            'relative_name' => 'required',
            'relationship' => 'required',
            'relative_address' => 'nullable',
            'date' => 'nullable',

            'file' => 'nullable',
            'description' => 'nullable',
        ];
    }
}
