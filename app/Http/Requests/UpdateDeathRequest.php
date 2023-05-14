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
        ];
    }
}
