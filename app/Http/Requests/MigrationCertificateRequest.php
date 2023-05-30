<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MigrationCertificateRequest extends FormRequest
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
            'book_id' => 'required',
            'province' => 'required',
            'district' => 'required',
            'municipality' => 'required',
            'ward_num' => 'required',
            'vdc' => 'nullable',
            'administrator' => 'required',
            'reg_number' => 'required',
            'entry_date' => 'required',
            'type' => 'required',
            'migration_province' => 'nullable',
            'migration_district' => 'nullable',
            'migration_municipality' => 'nullable',
            'migration_vdc' => 'nullable',
            'migration_village' => 'nullable',
            'migration_ward' => 'nullable',
            'migration_houseno' => 'nullable',
            'migration_date' => 'required',
            'migration_reason' => 'required',
            'relative_name' => 'required',
            'relationship' => 'nullable',
            'relative_address' => 'nullable',
            'date' => 'nullable',
            'file' => 'nullable',
        ];
    }
}
