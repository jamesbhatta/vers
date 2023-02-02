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
            'province'=>"required",
            'district'=>"required",
            'municipality'=>"required",
            'book_id'=>"required",
            'ward_num'=>"nullable",
            'administrator'=>"required",
            'reg_number'=>"required",
            'vdc'=>'nullable',
            'entry_date'=>"required",
            'name'=>"required",
            'gender'=>"required",
            'dob'=>"required",
            // 'mother_tongue'=>"required",
            'grandfather_name'=>"required",
            'birth_place'=>"required",
            'birth_type'=>"required",
            'physical_disable'=>"required",

            'father_name'=>'required',
            'father_parmanent_address'=>'required',
            'father_temporary_address'=>'nullable',
            'father_age_while_baby_born'=>'required',
            'father_country_where_baby_born'=>'required',
            'father_citizenship_number'=>'nullable',
            'father_religion'=>'required',
            'father_mother_toung'=>'required',
            'father_education'=>'required',
            'father_occupation'=>'required',
            'father_baby_number'=>'required',
            'father_alive_baby_number'=>'required',
            'father_helper'=>'required',
            'father_marige_date'=>'required',

            'mother_name'=>'required',
            'mother_parmanent_address'=>'required',
            'mother_temporary_address'=>'nullable',
            'mother_age_while_baby_born'=>'required',
            'mother_education'=>'required',
            'mother_country_where_baby_born'=>'required',
            'mother_citizenship_number'=>'nullable',
            'mother_religion'=>'required',
            'mother_mother_toung'=>'required',
            'mother_occupation'=>'required',
            'mother_baby_number'=>'required',
            'mother_alive_baby_number'=>'required',
            'mother_helper'=>'required',
            'mother_marige_date'=>'required',

            'relative_name'=>'required',
            'relationship'=>'required',
            'relative_address'=>'required',
            'date'=>'required',

            'file'=>'nullable',
            'description'=>'nullable',
        ];
    }
}
